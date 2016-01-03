<?php
namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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

}
