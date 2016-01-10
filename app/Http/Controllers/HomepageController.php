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
    	return view("homepage",compact("rs"));
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
