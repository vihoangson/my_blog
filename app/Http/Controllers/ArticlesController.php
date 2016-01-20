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


	public function edit_db(){

		$rs = Articles::limit(5100)->get();
		foreach ($rs as $key => $value) {
			preg_match_all("/src=[\"'](.+?)[\"']/",$value->article_content,$match);
			echo "<pre>";
			print_r($match);
			echo "</pre>";
			echo "<hr>";
		}
	}
}
