<?php
namespace App\Http\Controllers;
use App\Models\Blogs;
use App\Models\Articles;
use App\Models\Comment;
use App\Http\Controllers\ArticlesController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Log;
class NewsController  extends BaseController
{

	public function __construct(){
	}

	public function anyIndex(){
		$rs = Blogs::all();
		return view("news.index",compact("rs"));
	}

	public function anyDetail($id){
		$rs = Blogs::find($id);
		return view("news.detail",compact("rs"));
	}
}
