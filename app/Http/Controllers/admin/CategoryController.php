<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;

class CategoryController extends Controller
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
        $categories = Categories::latest()->paginate(10);
        return view('admin.category.index', compact('categories'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
        $name = $request->name;
        $slug = strtolower($request->name);
        $slug = str_replace(" ", "-", $slug);
        // return dd($slug);
        Categories::create(['name' => $name, 'slug' => $slug]);
        return redirect('/admin/category')->with('success', 'Successfull add category!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::find($id);
        // return $category;
        return view('admin.category.edit', compact('category'));
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
        $name = $request->name;
        $slug = strtolower($request->name);
        $slug = str_replace(" ", "-", $slug);

        Categories::where('id', $id)
        ->update([
            'name' => $request->name,
            'slug' => $slug,            
        ]);
        return redirect('/admin/category')->with('success', 'Successfull Edit category!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        Categories::destroy($id);
        return redirect('/admin/category')->with('failed', 'Successfull deleted category!');
    }
}
