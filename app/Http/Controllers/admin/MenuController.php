<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::paginate(10);
        return view('admin.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
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
        $url = $request->url;
        $slug = strtolower($request->name);
        $slug = str_replace(" ", "-", $slug);

        Menu::create([
            'name' => $name,
            'slug' => $slug,
            'url' => $url
        ]);

        return redirect('admin/menu')->with('success', 'Menu successful added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('admin.menu.edit', compact('menu'));
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
        $url = $request->url;
        $slug = strtolower($request->name);
        $slug = str_replace(" ", "-", $slug);   

        Menu::where('id', $id)
        ->update([
            'name' => $name,
            'slug' => $slug,            
            'url' => $url            
        ]);

        return redirect('admin/menu')->with('success', 'Menu successful Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
        return redirect('/admin/menu')->with('failed', 'Successfull deleted menu!');
    }
}
