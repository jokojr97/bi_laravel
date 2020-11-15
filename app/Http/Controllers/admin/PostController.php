<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Posts;
use App\Categories;
use App\PostType;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Posts::latest()->paginate(15);
        return view('admin.posts.index', compact('posts'));
        // return $posts;  
    }
    public function jajal()
    {
        $posts = Posts::latest()->paginate(15);
        return view('admin.posts.index', compact('posts'));
        // return $posts;  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::all();
        $type = PostType::all();
        return view('admin.posts.create', ['category' => $category, 'type' => $type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'published_at' => 'required',
            'keyword' => 'required',
            'exercipt' => 'required',
        ]);

        $slug = strtolower($request->title);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace("?", "", $slug);
        $slug = str_replace("!", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace(";", "", $slug);
        $image = $request->feature_image;
        if ($image) {
            $new_image = time().$image->getClientOriginalName();

            $post = Posts::create([           
                'title' => $request->title,
                'content' => $request->content,
                'feature_image' => $new_image,
                'categories' => $request->category_id,
                'type' => $request->type_id,
                'language' => $request->language,
                'slug' => $slug,
                'author' => $request->author,
                'keywords' => $request->keyword,
                'exercipt' => $request->exercipt, 
                'status' => $request->status, 
                'published_at' => $request->published_at,
            ]);

            $image->move('uploads/posts/', $new_image);
        }else {
            $post = Posts::create([           
                'title' => $request->title,
                'content' => $request->content,
                'feature_image' => '',
                'categories' => $request->category_id,
                'type' => $request->type_id,
                'slug' => $slug,
                'language' => $request->language,
                'author' => $request->author,
                'keywords' => $request->keyword,
                'exercipt' => $request->exercipt, 
                'status' => $request->status, 
                'published_at' => $request->published_at,
            ]);
        }
        return redirect('/admin/post')->with('success', 'Your Post Successfull Published');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::get()->where('slug', $id)->first();
        $posts = Posts::latest()->limit(8)->get();
        // return dd($post);
        return view('admin.posts.post_view', ['post' => $post, 'posts' => $posts]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Posts::find($id);        
        // return $post->id;
        $category = Categories::all();
        $type = PostType::all();

        return view('admin.posts.edit', ['posts' => $posts, 'category' => $category, 'type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'published_at' => 'required',
            'keyword' => 'required',
            'exercipt' => 'required',
        ]);

        $slug = strtolower($request->title);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace("?", "", $slug);
        $slug = str_replace("!", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace(";", "", $slug);
        $image = $request->feature_image;
        if ($image) {
            $new_image = time().$image->getClientOriginalName();

            Posts::where('id', $id)
            ->update([
                'title' => $request->title,
                'content' => $request->content,
                'feature_image' => $new_image,
                'categories' => $request->category_id,
                'type' => $request->type_id,
                'language' => $request->language,
                'slug' => $slug,
                'keywords' => $request->keyword,
                'exercipt' => $request->exercipt, 
                'published_at' => $request->published_at,           
            ]);

            $image->move('uploads/posts/', $new_image);
        }else {            
            Posts::where('id', $id)
            ->update([
                'title' => $request->title,
                'content' => $request->content,
                'categories' => $request->category_id,
                'keywords' => $request->keyword,
                'exercipt' => $request->exercipt, 
                'type' => $request->type_id,
                'language' => $request->language,
                'slug' => $slug,
                'published_at' => $request->published_at,           
            ]);
        }
        return redirect('/admin/post')->with('success', 'Successfull Edit Post!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        Posts::destroy($id);
        return redirect('/admin/post')->with('failed', 'Successfull deleted Post!');
    }
}
