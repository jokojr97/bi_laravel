<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Posts;
use App\Categories;
use App\PostType;
use App\ContactUs;

class PagesController extends Controller
{
    public function home(){                        
        $posts = Posts::limit(7)->latest()->get();
        $work = Posts::where('type', 1)->limit(4)->get();
        return view('page.index', ['posts' => $posts, 'work' => $work]);
        // echo dd($work);
    }
    public function news(){     
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $post = Posts::where('type', 1)->latest()->paginate(8);
        $ada = Posts::where('type', 1)->exists();
        return view('page.news', ['post' => $post, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada]);
    }
    public function report(){     
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $post = Posts::where('type', 4)->latest()->paginate(8);
        $ada = Posts::where('type', 4)->exists();
        return view('page.report', ['post' => $post, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada]);       
    }
    public function publication(){     
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $post = Posts::where('type', 5)->latest()->paginate(8);
        $ada = Posts::where('type', 5)->exists();
        return view('page.publication', ['post' => $post, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada]);       
    }
    public function paper(){     
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $post = Posts::where('type', 3)->latest()->paginate(8);
        $ada = Posts::where('type', 3)->exists();
        return view('page.paper', ['post' => $post, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada]);       
    }
    public function preview($id){           
        $posts = Posts::latest()->limit(8)->get();
        $post = Posts::get()->where('slug', $id)->first();
        $ada = Posts::where('slug', $id)->exists();
        // return $post;
        if ($ada) {
            return view('page.preview', ['post' => $post, 'posts' => $posts]);
        }else {
            return view('page.previewnull', ['posts' => $posts]);
        }
    }
    public function category($id){           
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $cat = Categories::get()->where('slug', $id)->first();
        if ($cat) {
            $post = Posts::where('categories', $cat->id)->paginate(8);
            $ada = Posts::where('categories', $cat->id)->exists();
        }else {
            $ada=false;
            $post="";
        }
        $ids = str_replace("-", " ", $id);
        return view('page.category', ['post' => $post, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada, 'ids' => $ids]);
    }
    public function type($id){           
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $cat = PostType::get()->where('slug', $id)->first();
        if ($cat) {
            $post = Posts::where('type', $cat->id)->paginate(8);
            $ada = Posts::where('categories', $cat->id)->exists();
        }else {
            $ada=false;
            $post="";
        }
        $ids = str_replace("-", " ", $id);
        return view('page.type', ['post' => $post, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada, 'ids' => $ids]);
    }
    public function search(Request $request){
        $search = $request->search;
        $post = Posts::where('content', 'like', '%'.$request->search.'%')->paginate(8);
        $ada = Posts::where('content', 'like', '%'.$request->search.'%')->exists();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        return view('page.search', ['post' => $post, 'category' => $category,'type' => $type, 'search' => $search, 'ada' => $ada]);
        // return dd($post);
    }
    public function notfond(){
        return redirect('login');
    }
    public function contactus(){
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        return view('page.contactus', ['posts' => $posts, 'category' => $category,'type' => $type]);    
    }
    public function contactstore(Request $request){
        // return $request;
        $contact = ContactUs::create($request->all());
        return redirect('/#contact')->with('success', 'Your Request Been Sent');
    }
}
