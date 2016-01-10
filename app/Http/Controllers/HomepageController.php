<?php
namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;

class HomepageController  extends BaseController
{
    public function index(){
    	$rs = Blogs::orderBy("id","desc")->get();
    	$array_web = [
			[
				"url"=>"http://sua.vn",
				"img"=>"sua.vn.png",
				"title"=>"sua.vn",
				"desc" =>"",
			],

			[
				"url"=>"http://daivietgroup.net",
				"img"=>"daivietgroup.net.png",
				"title"=>"daivietgroup.net",
				"desc" =>"",
			],

			[
				"url"=>"http://cbah.org.vn",
				"img"=>"cbah.org.vn.png",
				"title"=>"cbah.org.vn",
				"desc" =>"",
			],

			[
				"url"=>"http://hellobb.vn",
				"img"=>"hellobb.vn.png",
				"title"=>"hellobb.vn",
				"desc" =>"",
			],

			[
				"url"=>"http://babylovevn.com",
				"img"=>"babylovevn.com.png",
				"title"=>"babylovevn.com",
				"desc" =>"",
			],

			[
				"url"=>"http://bighost.vn",
				"img"=>"bighost.vn.png",
				"title"=>"bighost.vn",
				"desc" =>"",
			],

			[
				"url"=>"http://namsaigon.edu.vn",
				"img"=>"namsaigon.edu.vn.png",
				"title"=>"namsaigon.edu.vn",
				"desc" =>"",
			],

			[
				"url"=>"http://thuexechauau.com",
				"img"=>"thuexechauau.com.png",
				"title"=>"thuexechauau.com",
				"desc" =>"",
			],

			[
				"url"=>"http://hoancau.com",
				"img"=>"hoancau.com.png",
				"title"=>"hoancau.com",
				"desc" =>"",
			],

			[
				"url"=>"http://ankhanhtech.com.vn",
				"img"=>"ankhanhtech.com.vn.png",
				"title"=>"ankhanhtech.com.vn",
				"desc" =>"",
			],

			[
				"url"=>"http://showaglove.co.jp",
				"img"=>"showaglove.co.jp.png",
				"title"=>"showaglove.co.jp",
				"desc" =>"",
			],

			[
				"url"=>"http://asuchan.tv",
				"img"=>"asuchan.tv.png",
				"title"=>"asuchan.tv",
				"desc" =>"",
			],

    	];
    	return view("homepage",compact("rs","array_web"));
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

}
