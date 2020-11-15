<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SiteSetting;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site = SiteSetting::find(1);
        return view('admin.site.create', compact('site'));
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
        $site = SiteSetting::find($id);

        $title = $request->title;
        $slogan = $request->slogan;
        $logo = $request->logo;
        $facebook = $request->facebook;
        $twitter = $request->twitter;
        $instagram = $request->instagram;
        $whatsapps = $request->whatsapps;

        if ($logo == null) {
            $logos = $site->logo;
        }else {            
            $logos = time().$logo->getClientOriginalName();
            $logo->move('img/home/', $logos);
        }
        $icon = $request->icon;
        if ($icon == null) {
            $icons = $site->icon;
        }else {
            $icons = time().$icon->getClientOriginalName();
            $icon->move('img/home/', $icons);
        }
        // echo $logos." ".$icons;
        SiteSetting::where('id', $id)
        ->update([
            'title' => $title,
            'slogan' => $slogan,
            'logo' => $logos,
            'icon' => $icons,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'whatsapps' => $whatsapps
        ]);

        return redirect()->back()->with('success', 'site setting berhasil di edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
