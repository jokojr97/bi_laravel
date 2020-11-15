<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PostType;

class PostTypeController extends Controller
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
        $type = PostType::latest()->paginate(10);
        return view('admin.type.index', compact('type'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type.create');
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
        PostType::create(['name' => $name, 'slug' => $slug]);
        return redirect('/admin/type')->with('success', 'Successfull add Post Type!');
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
        $type = PostType::find($id);
        return view('admin.type.edit', compact('type'));
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
        $name = $request->name;
        $slug = strtolower($request->name);
        $slug = str_replace(" ", "-", $slug);

        PostType::where('id', $id)
        ->update([
            'name' => $request->name,
            'slug' => $slug,            
        ]);
        return redirect('/admin/type')->with('success', 'Successfull Edit Post Type!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PostType::destroy($id);
        return redirect('/admin/type')->with('failed', 'Successfull deleted Post Type!');
    }
}
