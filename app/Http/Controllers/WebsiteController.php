<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    
    public function index(){
        $categories = Category::orderBy('name','ASC')->where('ispublished','1')->get();
        $posts = Post::orderBy('id','DESC')->where('post_type','post')->where('ispublished','1')->paginate(5);
    	return view('website.index', compact('posts','categories'));
    }

    public function post($slug){

        $postspopular = Post::orderBy('id','DESC')->where('post_type','post')->where('ispublished','1')->limit(4)->get();

        $post = Post::where('slug',$slug)->where('post_type','post')->where('ispublished','1')->first();
        $categories = Category::orderBy('name','ASC')->where('ispublished','1')->get();
        if($post){
            return view('website.single', compact('post','categories','postspopular'));
        }
        else {
            return \Response::view('website.errors.404',array(),404);
        }
    }

    public function category($slug) {
         $categories = Category::orderBy('name','ASC')->where('ispublished','1')->get();
        $category = Category::where('slug', $slug)->where('ispublished', '1')->first();
        if($category){
            $posts = $category->posts()->orderBy('posts.id','DESC')->where('ispublished','1')->paginate(5);
             return view('website.category', compact('categories','category','posts'));
        }
        else {
            return \Response::view('website.errors.404',array(),404);
        }
    }
}
