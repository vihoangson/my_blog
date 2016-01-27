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
		$box_top       = Articles::where("article_link","like","%kinh-te%")->limit(3)->orderBy("id","desc")->get();
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

	//============ ============  ============  ============
	// Update db phần mở đầu của mỗi bản tin
	//
	public function get_extra_content(){

		$rs = Articles::whereraw("article_extra_content is null")->limit(500)->get();
		foreach ($rs as $key => $value) {
			$content = $value->article_content;
			$strip_text = trim(strip_tags($content));
			if(preg_match("/^Thứ/", $strip_text)){
				// ============ ============  ============  ============
				// Bỏ tất cả những thứ trên đầu
				//
				echo PHP_EOL."== Filter_content_vnexpress ==".PHP_EOL;

				//Loại bỏ các mục thừa không cần thiết của article_content
				$content  = $this->filter_content_vnexpress($content);

				//update lại article_content
				$value->update(["article_content"=>$content]);

			}
			// Lọc bỏ hết tag
			$extra_text = trim(strip_tags($content));

			// ============ ============  ============  ============
				if(empty($value->article_extra_content)){
					// Lưu vào csdl
					if($value->update(["article_extra_content" => $extra_text])){
						echo "<p>done</p>".PHP_EOL;
					}else{
						echo "<p>error</p>".PHP_EOL;
					}
				}

			//
			//  ============ ============  ============  ============
		}
	}

	// ============ ============  ============  ============
	// Bỏ tất cả những thứ trên đầu của content
	// Desc: Loại bỏ các mục thừa không cần thiết của article_content
	//
	private function filter_content_vnexpress($content){
		$dom = str_get_html($content);
		if($dom->find(".title_news")){
			$dom->find(".title_news",0)->outertext ="";
		}

		if($dom->find(".block_timer_share")){
			$dom->find(".block_timer_share",0)->outertext ="";
		}

		if($dom->find(".relative_new")){
			$dom->find(".relative_new",0)->outertext ="";
		}
		if($dom->find(".title_div_fbook")){
			$dom->find(".title_div_fbook",0)->outertext ="";
		}
		if($dom->find(".Normal")){
			$dom->find(".Normal",0)->outertext ="";
		}
		$return = $dom->__toString();
		$dom->clear();
		return $return;
	}
	//
	//============ ============  ============  ============


	//============ ============  ============  ============
	// Lấy các bản tin và show ra hình chính
	//
	public function update_main_img(){
		//============  ============
		// Lấy dữ liệu từ trong bảng
		//============  ============
		$rs = Articles::whereraw("article_imgs is null ")->limit(3000)->get();
		//$rs = Articles::limit(3000)->get();

		//============  ============
		//  Vòng lập duyệt toàn bộ array
			foreach ($rs as $key => $value) {
				//============  ============
				//  Chuyen thanh mang json
				//============  ============
				$article_imgs = json_encode((array)$this->get_main_img($value->article_content));
				//============  ============
				// Update vào cột article_imgs
				//============  ============
				if($value->update(["article_imgs"=>$article_imgs])){
					echo "[done]";
				}else{
					echo "[error]";
				}
				echo PHP_EOL;
			}
		//
		//============  ============
	}
	//
	//============ ============  ============  ============

	//============ ============  ============  ============
	//  Function lấy các hình chính trong content
	public function get_main_img($content){
		$return=[];
		//============  ============
		// Match các link có trong bài viết
		//============  ============
		preg_match_all("/<img(.+?)src=[\"'](.+?)[\"']/",$content,$match);
		foreach ($match[2] as $key => $value) {
			//============  ============
			// Lọc ra các từ không cần thiết
			//============  ============
			if(!(preg_match("/(icons\/social_|img_blank|icon_)/", $value))){
				$return[] = $value;
			}
		}
		return $return;
	}
	//
	//  ============ ============  ============  ============

	//============  ============
	//  Hàm check tất cả hình còn sống không
	public function article_imgs_check_img_exist(){
		// Dùng get_headers để kiểm tra
		//
		$rs = Articles::limit(40)->get();
		foreach ($rs as $key => $value) {
			$array = json_decode($value->article_imgs,true);
			foreach ($array as $key2 => $value2) {
			}
		}
	}

	public function article_imgs_show_all_img_article(){
		$rs = Articles::limit(40)->get();
		foreach ($rs as $key => $value) {
			$array = json_decode($value->article_imgs,true);
			foreach ($array as $key2 => $value2) {


			}
		}
		//============  ============
		// $json = json_encode($return);
		// Lưu file ngoài root
		// file_put_contents(time().".json", $json);

		dd($return);
	}

}
