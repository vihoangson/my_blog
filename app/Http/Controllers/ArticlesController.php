<?php
namespace App\Http\Controllers;
use App\Models\Blogs;
use App\Models\Articles;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Log;
class ArticlesController  extends BaseController
{

	public function __construct(){
	}

	public function homepage(){
		//$rs            = Articles::limit(100)->orderBy("id","desc")->get();
		$rs=[];
		$box_top       = Articles::limit(3)->orderBy("id","desc")->get();
		$box_right_top = Articles::limit(3)->orderBy("id","desc")->get();
		$most_popular  = Articles::limit(5)->orderBy("id","desc")->get();
		$highlights    = Articles::limit(5)->orderBy("id","desc")->get();
		$editors_picks = Articles::limit(3)->orderBy("id","desc")->get();
		$popular_posts = Articles::limit(7)->orderBy("id","desc")->get();
		$trending      = Articles::limit(17)->orderBy("id","desc")->get();
		$social_media  = Articles::limit(4)->orderBy("id","desc")->get();
		return view("articles.index",compact("rs","box_top","box_right_top","most_popular","highlights","editors_picks","popular_posts","trending","social_media"));
	}// End function index()

	public function detail($id){
		$rs = Articles::find($id);
		return view("articles.detail",compact("rs"));
	}

	public function article_endless(){
		$rs = Articles::limit(100)->orderBy("id","desc")->get();
		return view("articles.article-endless",compact("rs"));
	}

	public function index(){
		$rs = Articles::limit(100)->orderBy("id","desc")->get();
		return view("articles.list",compact("rs"));
	}// End function index()
	//
	//============ import_vnexpress() ============

	public function detail_ajax($id){
		$rs = Articles::find($id);
		?>
			<div class="head-post">
				<h2><a href="#"><?= $rs->article_title; ?></a></h2>
				<p>I think your best bet would be to start or join a startup. That's been a reliable way to get rich for hundreds of years.The word "startup" dates from the 1960s, but what happens in one is very similar.</p>
				<div class="meta">
					<span class="author">By <a href="#">Anna Chapman</a></span>
					<span class="time"> Published on May 07, 2004.</span>
				</div>
			</div><!-- /.head-post -->
			<div class="body-post">
				<div class="main-post">
					<div class="entry-post">
						<?= $rs->article_content; ?>
					</div><!-- /.entry-post -->
					<div class="tags">
						<h4>In this article:</h4>
						<a href="#">Startups</a>
						<a href="#">Technology</a>
						<a href="#">Millions of dollars</a>
						<a href="#">Paul Graham</a>
					</div>
					<div class="load-comment">
						<a href="#">Load Comments (35)</a>
					</div>
				</div><!-- /.main-post -->
			</div><!-- /.body-post -->
		<?php
	}


	public static function edit_db(){

		$rs = Articles::whereraw("article_extra_content is null")->limit(100)->get();
		foreach ($rs as $key => $value) {
			$content = $value->article_content;
			$strip_text = trim(strip_tags($content));
			if(preg_match("/^Thứ/", $strip_text)){
				$content  = $this->filter_content_vnexpress($content);
			}
			$extra_text = trim(strip_tags($content));

			//echo $extra_text;

			// ============ ============  ============  ============ 
			// Lưu vào csdl
			// extra_text
				if(true)
				if(empty($value->article_extra_content)){
					if($value->update(["article_extra_content" => $extra_text])){
						echo "<p>done</p>";
					}else{
						echo "<p>error</p>";
					}
				}

			//
			//  ============ ============  ============  ============ 
			//echo mb_substr($extra_text,0,400);
			echo "<hr>";
		}	
	}

	private function filter_content_vnexpress($content){
		$dom = str_get_html($content);
		echo "<h2>title_news</h2>";
		if($dom->find(".title_news")){
			$dom->find(".title_news",0)->outertext ="";
		}

		echo "<h2>block_timer_share</h2>";
		if($dom->find(".block_timer_share")){
			$dom->find(".block_timer_share",0)->outertext ="";
		}

		echo "<h2>relative_new</h2>";
		if($dom->find(".relative_new")){
			$dom->find(".relative_new",0)->outertext ="";
		}
		echo "<h2>title_div_fbook</h2>";
		if($dom->find(".title_div_fbook")){
			$dom->find(".title_div_fbook",0)->outertext ="";
		}
		echo "<h2>Normal</h2>";
		if($dom->find(".Normal")){
			$dom->find(".Normal",0)->outertext ="";
		}
		$return = $dom->__toString();
		$dom->clear();
		return $return;
	}
}
