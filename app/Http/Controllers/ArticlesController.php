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
		$rs            = Articles::limit(100)->orderBy("id","desc")->get();
		$box_top       = Articles::limit(3)->orderBy("id","desc")->get();
		$box_right_top = Articles::limit(3)->orderBy("id","desc")->get();
		$most_popular  = Articles::limit(5)->orderBy("id","desc")->get();
		$highlights = Articles::limit(5)->orderBy("id","desc")->get();
		return view("articles.index",compact("rs","box_top","box_right_top","most_popular","highlights"));
	}// End function index()

	public function index(){
		$rs = Articles::limit(100)->orderBy("id","desc")->get();
		return view("articles.list",compact("rs"));
	}// End function index()
	//
	//============ import_vnexpress() ============

	public function detail($id){

		$rs = Articles::find($id);
		echo "<h2>".$rs->article_title."</h2>";
		echo $rs->article_content;
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
