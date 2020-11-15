<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Categories;
use App\PostType;


class AdminController extends Controller
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
        // return view('home');

        $post = Posts::latest()->limit(8)->get();
        $category = Categories::latest()->limit(8)->get();
        $type = PostType::limit(8)->get();
        return view('admin.dashboard', ['post' => $post, 'category' => $category, 'type' =>$type]);
    }
}
