<?php
namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomepageController  extends BaseController
{
    public function index(){
    	$rs = Blogs::orderBy("id","desc")->get();
    	return view("homepage",compact("rs"));
    }

    public function show($id){
    	$rs = Blogs::find($id);
    	return view("blog_sigle",compact("rs"));
    }

    public function send_mail(Request $request){
		$data = ($request->all());

		$body = "senderName".$data["senderName"]."<br>".
		"senderEmail".$data["senderEmail"]."<br>".
		"subject".$data["subject"]."<br>".
		"message".$data["message"]."<br>";
		$subject = 'Email từ My Blog '.date("Y-m-d H:i:s");
		$data = array(
			'body' => $body
			);
		Mail::send($name_email, $data, function ($message) {
			$message->from('info@vihoangson.com', 'Vi Hoàng Sơn');
			$message->to('vihoangson@gmail.com')->subject($subject);
		});
    	echo "success";
    }

}
