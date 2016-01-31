<?php
namespace App\Http\Controllers;
use App\Models\Blogs;
use App\Models\Articles;
use App\Http\Controllers\ArticlesController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Log;
class HomepageController  extends BaseController
{
	public $array_site;

	public function __construct(){
		define("LOG_INFO_FLAG_IMPORT", false);
		//parent::__construct();
		$this->array_site = [
			0 => "http://vnexpress.net/tin-tuc/thoi-su",
			1 => "http://vnexpress.net/tin-tuc/the-gioi",
			2 => "http://kinhdoanh.vnexpress.net/",
			3 => "http://giaitri.vnexpress.net/",
			4 => "http://thethao.vnexpress.net",
			5 => "http://vnexpress.net/tin-tuc/phap-luat",
			6 => "http://vnexpress.net/tin-tuc/giao-duc",
			7 => "http://suckhoe.vnexpress.net",
			8 => "http://giadinh.vnexpress.net/",
			9 => "http://dulich.vnexpress.net",
			10 => "http://vnexpress.net/tin-tuc/khoa-hoc",
			11 => "http://vnexpress.net/tin-tuc/khoa-hoc/page/2.html",
			12 => "http://sohoa.vnexpress.net/",
			13 => "http://vnexpress.net/tin-tuc/oto-xe-may",
			14 => "http://vnexpress.net/tin-tuc/cong-dong",
			15 => "http://vnexpress.net/tin-tuc/tam-su",
			16 => "http://vnexpress.net/tin-tuc/tam-su/page/3.html",
			17 => "http://vnexpress.net/tin-tuc/cuoi",
		];
	}
	public function index(){
		//
		// Thông tin các trang web đã từng làm
		//
		$array_web = [
			[
				"url"=>"http://sua.vn",
				"img"=>"sua.vn.png",
				"title"=>"SUA.VN",
				"desc" =>"Trang web sữa hàng đầu Việt Nam",
			],

			[
				"url"=>"http://daivietgroup.net",
				"img"=>"daivietgroup.net.png",
				"title"=>"Daivietgroup",
				"desc" =>"Tập đoàn Đại Việt",
			],

			[
				"url"=>"http://cbah.org.vn",
				"img"=>"cbah.org.vn.png",
				"title"=>"CBAH",
				"desc" =>"Hiệp hội doanh nghiệp Trung Quốc",
			],

			[
				"url"=>"http://hellobb.vn",
				"img"=>"hellobb.vn.png",
				"title"=>"hellobb.vn",
				"desc" =>"Hệ thống thương hiệu HelloBB",
			],

			[
				"url"=>"http://babylovevn.com",
				"img"=>"babylovevn.com.png",
				"title"=>"babylovevn.com",
				"desc" =>"Cửa hàng trực tuyến",
			],

			[
				"url"=>"http://bighost.vn",
				"img"=>"bighost.vn.png",
				"title"=>"bighost.vn",
				"desc" =>"Trang web kinh doanh domain & hosting",
			],

			[
				"url"=>"http://namsaigon.edu.vn",
				"img"=>"namsaigon.edu.vn.png",
				"title"=>"namsaigon.edu.vn",
				"desc" =>"Trường trung cấp nghề Nam Sài Gòn",
			],

			[
				"url"=>"http://thuexechauau.com",
				"img"=>"thuexechauau.com.png",
				"title"=>"thuexechauau.com",
				"desc" =>"Dịch vụ thuê xe",
			],

			[
				"url"=>"http://hoancau.com",
				"img"=>"hoancau.com.png",
				"title"=>"hoancau.com",
				"desc" =>"Công ty Hoàn Cầu",
			],

			[
				"url"=>"http://ankhanhtech.com.vn",
				"img"=>"ankhanhtech.com.vn.png",
				"title"=>"ankhanhtech.com.vn",
				"desc" =>"Cửa hàng kinh doanh thiết bị dụng cụ",
			],

			[
				"url"=>"http://showaglove.co.jp",
				"img"=>"showaglove.co.jp.png",
				"title"=>"showaglove.co.jp",
				"desc" =>"Tập đoàn quốc tế Showa",
			],

			[
				"url"=>"http://asuchan.tv",
				"img"=>"asuchan.tv.png",
				"title"=>"asuchan.tv",
				"desc" =>"Asuchan TV",
			],

		];
		$skill_level = [
			"Laravel Framework"               => 3, // Laravel Framework: ###
			"Codeigniter"                     => 5, // Codeigniter: #####
			"Zend Framework"                  => 3, // Zend Framework: ###
			"Wordpress"                       => 3, // Wordpress: ###
			"MySQL"                           => 4, // MySQL: ####
			"PHP"                             => 5, // PHP: #####
			"CSS(3)"                          => 4, // CSS(3): ####
			"HTML(5)"                         => 4, // HTML(5): ####
			"Command line"                    => 4, // Command line: ####
			"JSON"                            => 5, // JSON: #####
			"XML"                             => 3, // XML: ###
			"Bootstrap Framework"             => 5, // Bootstrap Framework: #####
			"JQuery"                          => 5, // JQuery: #####
			"Javascript"                      => 4, // Javascript: ####
			"ElasticSearch"                   => 1, // ElasticSearch: #
			"BEM"                             => 3, // BEM: ##### Cách đặt tên (Blocks, Elements, Modifiers) Blog__Element--Modifi
			"LESS"                            => 2, // LESS: #
			"SASS"                            => 2, // SASS: #
			"Method Factory Pattern"          => 5, // Method Factory Pattern: #####
			"MVC Pattern"                     => 4, // MVC Pattern: ####
			"Builder Pattern"                 => 5, // Builder Pattern: #####
			"Singleton Pattern"               => 5, // Singleton Pattern: #####
			"Object Orientated Programming"   => 4, // Object Orientated Programming: #### Hướng đối tượng
			"SEO"                             => 3, // SEO: ### Search Engin
			"UML (Unified Modeling Language)" => 1, // UML: ##### Vẽ sơ đồ cấu trúc chương trình
			"AngularJS"                       => 1, // AngularJS: # Plugin Javascript
			"Ruby"                            => 1 // Ruby: #
		];
		$rs = Blogs::orderBy("id","desc")->get();

		$i=1;
		$j=1;

		define("PERPAGE_BLOG",5);

		foreach ($rs as $key => $value) {
			$rs_p[$i][] = $value;
			if($j % PERPAGE_BLOG ==0){
				$i++;
			}
			$j++;
		}
		return view("homepage",compact("rs","array_web","skill_level","rs_p"));
	}

	public function show($id){
		$rs = Blogs::find($id);
		return view("blog_sigle",compact("rs"));
	}

	public function send_mail(Request $request){
		$data = ($request->all());

		$body = "

		<p><b>SenderName</b>: ".$data["senderName"]."</p>
		<p><b>SenderEmail</b>: ".$data["senderEmail"]."</p>
		<p><b>Subject</b>: ".$data["subject"]."</p>
		<p><b>Message</b>:  ".$data["message"]."</p>

		";

		$data = array(
			'body' => $body
			);

		Mail::send('emails.welcome', $data, function ($message) {
			$message->from('info@vihoangson.com', 'Vi Hoàng Sơn');
			$message->to('vihoangson@gmail.com')->subject('Email từ My Blog '.date("Y-m-d H:i:s"));
		});
		echo "success";
	}



	//============  ============
	// ****** Function import_vnexpress() ******
	// **Công dụng: Import tin tức từ trang vnexpress.net**
	// **Ngày tạo: 13/1/2016**
	// **Tác giả: Santosan**
	// ope
	public function import_vnexpress($case = null){
		Log::info("Do log import_vnexpress in ".date("Y-m-d H:i:s"));
		if(true){
			//============  ============
			//
			//
			if(empty($this->array_site)){
				echo "List null";
				return;
			}

			if(empty($case)){
				echo "Nhap gia tri";
				return;
			}
			switch ($case){
				case "home":
					$array_site_a[0]="http://vnexpress.net";
				break;
				case "all":
					$array_site_a=$this->array_site;
				break;
				default:
					$array_site_a[0]=$this->array_site[(int)$case];
				break;
			}

			// foreach tất cả phần tử trong mảng $this->array_site
			foreach ($array_site_a as $key_site => $value_site) {
				// Khởi tạo biến dom của link $value_site
				$dom = str_get_html(file_get_contents($value_site));
				// Lấy ra tất cả các tag a có trong link $value_site
				$m = $dom->find("a");
				// foreach tất cả các tag a có trong link $value_site
				foreach ($m as $key => $value) {

					// Nếu tồn tại href thì vào trong
					if(!empty($value->attr["href"])){

						// Lấy các link có phần tử cuối là .html và độ dài từ 10 ký tự trở lên
						if(preg_match("/.{10,}\.html$/", $value->attr["href"])){

							// Log ban đầu
							echo "=== Link: ".$value->attr["href"].PHP_EOL;
							if(LOG_INFO_FLAG_IMPORT){
								Log::info("Link: ".$value->attr["href"]);
							}

							//============  ============
							//
							//Khởi tạo biến title
							//Phần tử trong có thể bao gồm
							//1: plaintex
							//2: img
								// Kiểm tra trong link có phải hình hay không
								if($value->find("img",0)){// Đúng là hình
									if(!empty($value->find("img",0)->attr["alt"])){//Có alt gán biến title
										$title = $value->find("img",0)->attr["alt"];
									}else{//Nếu không có alt thì continue
										if(LOG_INFO_FLAG_IMPORT){
											Log::info("exit :0 __ ".$value->attr["href"]);
										}
										continue;
									}
								}else{// Không phải hình
									$title = $value->innertext();
								}
							//
							//============  ============

							// Các trường hợp bắt lỗi
							// 1: Link đã có trong DB
							// 2: Chuỗi $title < 10 kỹ tự
							if(Articles::where("article_link",$value->attr["href"])->count()!=0 || strlen(trim($title)) < 10 ){
								if(LOG_INFO_FLAG_IMPORT){
									Log::info("exit :1 __ ".$title);
								}
								continue;
							}

							// Nếu link là đường dẫn tương đối thì thêm domain vào
							if(preg_match("/^\//", $value->attr["href"])){
								$value->attr["href"] = "http://vnexpress.net".$value->attr["href"];
							}

							//============ ============  ============  ============
							//  Khởi tạo biến $dom2 với nội dung theo link $value->attr["href"]
							// Bạn có thể dùng function get content của vihoangson
							// Gist.github: https://gist.github.com/vihoangson/647d856380ac5ca353b0
							// Desc: Function lấy nội dung html của trang web khác bằng cUrl
							// Function curl_get($url)
							//
							$dom2    = str_get_html(file_get_contents($value->attr["href"]));

							$title   = $title;
							$link    = $value->attr["href"];

							// Rửa tổng biến $content
							$content="";
							// Tìm phần tử đầu tiên trong dom có giá trị là #left_calculator
							if($dom2->find("#left_calculator",0)){
								$content = $dom2->find("#left_calculator",0)->innertext();
							}

							//============  ============
							// Save vào DB
							//
								if($content == ""){
									$dom2->clear();
									if(LOG_INFO_FLAG_IMPORT){
										Log::info("exit : Content rỗng");
									}
									continue;
								}

								$data = [
								"article_title" => $title,
								"article_content" => $content,
								"article_link" => $link
								];
								if(Articles::create($data)){
									echo "!!! Saved: ".$title.PHP_EOL;
									if(LOG_INFO_FLAG_IMPORT){
										Log::info("!!! Saved: ".$title);
									}
								}else{
									if(LOG_INFO_FLAG_IMPORT){
										Log::info("!!! Could't Save: ".$title);
									}
								}
							//
							//============  ============
						}
					}
				} // End foreach $m
			}// End foreach $this->array_site
				// Dừng chương trình
				die;
			//
			//  ============  ============
		}// End if


		// Lấy bài viết top
        $this->vnexpress_set_important_news();
        $c = new ArticlesController;
        // Lấy phần mở đầu
        $c->get_extra_content();
        // lấy hình ảnh chính
        $c->update_main_img();
	}// End function import_vnexpress()
	//
	//============ import_vnexpress() ============



	public function test_case(){	
		$this->vnexpress_rebuild_cat();
	}

	//============ ============  ============  ============ 
	//  Khởi tạo article_cat từ link
	//  
	public function vnexpress_rebuild_cat(){
		//Xử lý cái này: article_cat
		$rs = Articles::all();
		foreach ($rs as $key => $value) {
			$match=[];
			$pattern = "/thoi-su|the-gioi|kinhdoanh|giaitri|thethao|phap-luat|giao-duc|suckhoe|giadinh|dulich|khoa-hoc|oto-xe-may|cong-dong|tam-su|cuoi/";
			preg_match($pattern, $value->article_link,$match);
			if(empty($match)) continue;
			$value->update(["article_cat"=>$match[0]]);
			echo $match[0].PHP_EOL;
			echo $value->id.PHP_EOL;
		}
	}

	public function vnexpress_set_important_news(){
		//============  ============
		//  Tạo column mới: article_mode
		//
		$html = file_get_contents("http://vnexpress.net");
		$dom = str_get_html($html);
		$link_important = $dom->find(".line_col_midnews_top .content_scoller li a");
		foreach ($link_important as $key => $value) {
			if(Articles::where("article_link",$value->attr["href"])->update(["article_mode"=>1])){
				echo (Articles::where("article_link",$value->attr["href"])->first()->article_title).PHP_EOL;
				// echo $value->attr["href"].PHP_EOL;
			}
		}
		//
		//============  ============

	}

}
