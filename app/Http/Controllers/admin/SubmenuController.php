<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;
use App\SubMenu;

class SubmenuController extends Controller
{
    public function store(Request $request)
    {
        // return $request;
        $name = $request->name;
        $url = $request->url;
        $slug = strtolower($request->name);
        $slug = str_replace(" ", "-", $slug); 
        $menu = $request->menu_id;

        SubMenu::create([
            'name' => $name,
            'slug' => $slug,
            'url' => $url,
            'menu_id' => $menu
        ]);

        return redirect()->back()->with('success', 'Menu successful Edited!');;
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
        $menu = Menu::find($id);
        $submenu = SubMenu::where('menu_id', $id)->get();
        // dd($submenu);

        return view('admin.menu.submenu', ['menu' => $menu, 'submenu' => $submenu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $submenus = SubMenu::find($id);
        $menu = Menu::find($submenus->menu_id);
        $submenu = SubMenu::where('menu_id', $submenus->menu)->get();
        // dd($menu);
        return view('admin.menu.editsubmenu', ['submenus' => $submenus, 'menu' => $menu, 'submenu' => $submenu]);
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
        $menu = $request->menu_id;
        $slug = strtolower($request->name);
        $slug = str_replace(" ", "-", $slug);   

        SubMenu::where('id', $id)
        ->update([
            'name' => $name,
            'slug' => $slug,            
            'url' => $url,            
            'menu_id' => $menu            
        ]);

        return redirect()->back()->with('success', 'Menu successful Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubMenu::destroy($id);
        return redirect()->back()->with('failed', 'Successfull deleted menu!');
    }
}
