<?php

namespace App\Http\Controllers;

use App\Post;
use App\Gallery;
use App\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->get()->count();
        $categories = Category::orderBy('id', 'DESC')->get()->count();
        $galleries = Gallery::orderBy('id', 'DESC')->get()->count();
        return view('admin/dashboard', compact('posts','categories','galleries'));
    }
}
