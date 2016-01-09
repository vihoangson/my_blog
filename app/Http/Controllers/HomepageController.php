<?php
namespace App\Http\Controllers;
use Mail;
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
		echo $data["senderName"]."<br>";
		echo $data["senderEmail"]."<br>";
		echo $data["subject"]."<br>";
		echo $data["message"]."<br>";
		// $count=1;

		// $data = array(
		// 	'body' => "Tổng số record: ".$count
		// 	);
		// Mail::send('emails.welcome', $data, function ($message) {
		// 	$message->from('info@vihoangson.com', 'Vi Hoàng Sơn');
		// 	$message->to('vihoangson@gmail.com')->subject('Learning Laravel test email '.date("Y-m-d H:i:s"));
		// });


		// $body = "senderName".$data["senderName"]."<br>".
		// "senderEmail".$data["senderEmail"]."<br>".
		// "subject".$data["subject"]."<br>".
		// "message".$data["message"]."<br>";
		// $subject = 'Email từ My Blog '.date("Y-m-d H:i:s");
		// $name_email = "Vi Hoang Son";
		// echo $body;
		// $data = array(
		// 	'body' => $body
		// 	);
		// Mail::send($name_email, $data, function ($message) {
		// 	$message->from('info@vihoangson.com', 'Vi Hoàng Sơn');
		// 	$message->to('vihoangson@gmail.com')->subject($subject);
		// });

    	//echo "success";
    }

}
