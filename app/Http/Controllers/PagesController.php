<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Pages;
use App\Kegiatan;
use App\KegiatanAttachment;
use App\Categories;
use App\PostType;
use App\ContactUs;
use App\Menu;
use App\SubMenu;
use App\SiteSetting;

class PagesController extends Controller
{
    public function home(){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $posts = Posts::limit(7)->latest()->get();
        $berita = Posts::where('type', 1)->limit(6)->get();
        $kegiatan = Posts::where('type', 1)->limit(8)->get();
        $opini = Posts::where('type', 1)->limit(4)->get();
        $galeri = Posts::where('type', 1)->limit(8)->get();
        $work = Posts::where('type', 1)->limit(4)->get();
        return view('page.index', ['berita' => $berita, 'kegiatan' => $kegiatan, 'opini' => $opini, 'work' => $work, 'work' => $work, 'galeri' => $galeri, 'menu' => $menu, 'site' => $site]);
        // echo dd($work);
    }
    public function news(){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $berita = Posts::where('type', 1)->latest()->paginate(8);
        $ada = Posts::where('type', 1)->exists();
        $latest = Posts::latest()->limit(8)->get();
        $tags = 'Bojonegoro, Institute, Bojonegoro Institute';
        return view('page.news', ['berita' => $berita, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada, 'latest' => $latest, 'menu' => $menu, 'site' => $site, 'tags' => $tags]);
    }
    public function preview($id){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $posts = Posts::latest()->limit(8)->get();
        $post = Posts::get()->where('slug', $id)->first();
        $ada = Posts::where('slug', $id)->exists();
        // return $post;
        if ($ada) {
            return view('page.preview', ['post' => $post, 'posts' => $posts, 'menu' => $menu, 'site' => $site]);
        }else {
            return view('page.previewnull', ['posts' => $posts, 'menu' => $menu, 'site' => $site]);
        }
    }
    public function category($id){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $cat = Categories::get()->where('slug', $id)->first();
        $latest = Posts::latest()->limit(8)->get();
        if ($cat) {
            $post = Posts::where('categories', $cat->id)->paginate(8);
            $ada = Posts::where('categories', $cat->id)->exists();
        }else {
            $ada=false;
            $post="";
        }
        $ids = str_replace("-", " ", $id);
        return view('page.category', ['post' => $post, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada, 'ids' => $ids, 'latest' => $latest, 'menu' => $menu, 'site' => $site]);
    }
    public function type($id){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $maktif = Menu::where('slug', $id)->first();
        if ($maktif) {
        }else {
        }
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $cat = PostType::get()->where('slug', $id)->first();
        $latest = Posts::latest()->limit(8)->get();
        if ($cat) {
            $post = Posts::where('type', $cat->id)->paginate(8);
            $ada = Posts::where('categories', $cat->id)->exists();
        }else {
            $ada=false;
            $post="";
        }
        $ids = str_replace("-", " ", $id);
        return view('page.type', ['post' => $post, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada, 'ids' => $ids, 'latest' => $latest, 'menu' => $menu, 'site' => $site]);
    }
    public function search(Request $request){
        // dd($request);
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $search = $request->search;
        $post = Posts::where('content', 'like', '%'.$request->search.'%')->paginate(8);
        $ada = Posts::where('content', 'like', '%'.$request->search.'%')->exists();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $latest = Posts::latest()->limit(8)->get();
        // dd($post);
        return view('page.search', ['post' => $post, 'category' => $category,'type' => $type, 'search' => $search, 'ada' => $ada, 'latest' => $latest, 'menu' => $menu, 'site' => $site]);
        // return dd($post);
    }
    public function page($id) {
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $posts = Pages::latest()->limit(8)->get();
        $page = Pages::get()->where('slug', $id)->first();
        $ada = Pages::where('slug', $id)->exists();
        // return $page;
        if ($ada) {
            return view('page.pagepreview', ['page' => $page, 'posts' => $posts, 'menu' => $menu, 'site' => $site]);
        }else {
            $posts = Posts::latest()->limit(8)->get();
            return view('page.previewnull', ['posts' => $posts, 'menu' => $menu, 'site' => $site]);
        }
    }
    public function notfond(){
        return redirect('login');
    }
    public function contactus(){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $latest = Posts::latest()->limit(8)->get();
        return view('page.contactus', ['posts' => $posts, 'category' => $category,'type' => $type, 'latest' => $latest, 'menu' => $menu, 'site' => $site]);
    }
    public function contactstore(Request $request){
        // return $request;
        $contact = ContactUs::create($request->all());
        return redirect('/#contact')->with('success', 'Your Request Been Sent');
    }

    public function kegiatan(){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $post = Kegiatan::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $kegiatan = Kegiatan::latest()->paginate(8);
        $ada = Kegiatan::exists();
        $latest = Posts::latest()->limit(8)->get();
        return view('page.kegiatan', ['post' => $post, 'kegiatan' => $kegiatan, 'category' => $category,'type' => $type, 'ada' => $ada, 'latest' => $latest, 'menu' => $menu, 'site' => $site]);        
    }

    public function tagpreview(Request $request){
        dd($request);
    }

    public function kegiatanpreview($id){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $posts = Posts::latest()->limit(8)->get();
        $kegiatan = Kegiatan::get()->where('slug', $id)->first();
        $ada = Kegiatan::where('slug', $id)->exists();
        // return $post;
        if ($ada) {
            return view('page.kegiatanpreview', ['kegiatan' => $kegiatan, 'posts' => $posts, 'menu' => $menu, 'site' => $site]);
        }else {
            return view('page.previewnull', ['posts' => $posts, 'menu' => $menu, 'site' => $site]);
        }
    }
}
