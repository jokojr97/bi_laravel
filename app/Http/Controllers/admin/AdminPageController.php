<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pages;
use App\Menu;

class AdminPageController extends Controller
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
        $pages = Pages::latest()->paginate(10);
        return view('admin.page.index', compact('pages'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'keywords' => 'required',
        ]);

        $slug = strtolower($request->title);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace("?", "", $slug);
        $slug = str_replace("!", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace(";", "", $slug);

        $post = Pages::create([           
            'title' => $request->title,
            'name' => $request->name,
            'slug' => $slug,
            'content' => $request->content,
            'layouts' => $request->layouts,
            'author' => $request->author,
            'keywords' => $request->keywords,
            'description' => $request->description, 
            'status' => $request->status, 
        ]);
        return redirect('admin/page')->with('success', 'Successfull add page!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        $page = Pages::find($id);
        $menu = Menu::all();
        // return dd($page);
        return view('admin.page.preview', ['page' => $page, 'menu' => $menu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Pages::find($id);
        return view('admin.page.edit', compact('page'));  
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
        Pages::where('id', $id)
        ->update([
            'name' => $request->name,
            'content' => $request->content,
            'layouts' => $request->layouts,
            'title' => $request->title,
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);

        return redirect('/admin/page')->with('success', 'Successfull Edit Page!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Pages::destroy($id);
        return redirect('/admin/page')->with('failed', 'Successfull deleted page!');
    }
}
