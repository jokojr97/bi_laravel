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
        $berita = Posts::where('type', 1)->limit(3)->get();
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
        // dd($category[0]->count(1));
        return view('page.news', ['berita' => $berita, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada, 'latest' => $latest, 'menu' => $menu, 'site' => $site, 'tags' => $tags]);
    }
    public function preview($id){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $category = Categories::latest()->limit(6)->get();
        $posts = Posts::latest()->limit(8)->get();
        $post = Posts::get()->where('slug', $id)->first();
        $ada = Posts::where('slug', $id)->exists();
        // return $post;
        if ($ada) {
            return view('page.preview', ['post' => $post, 'posts' => $posts, 'menu' => $menu, 'site' => $site, 'category' => $category]);
        }else {
            return view('page.previewnull', ['posts' => $posts, 'menu' => $menu, 'site' => $site, 'category' => $category]);
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
    public function type(Request $request){
        $site = SiteSetting::find($request->segment(2));
        $menu = Menu::all();
        $maktif = Menu::where('slug', $request->segment(2))->first();
        if ($maktif) {
        }else {
        }
        $posts = Posts::latest()->limit(4)->get();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $cat = PostType::get()->where('slug', $request->segment(2))->first();
        $latest = Posts::latest()->limit(8)->get();
        if ($cat) {
            $post = Posts::where('type', $cat->id)->paginate(8);
            $ada = Posts::where('categories', $cat->id)->exists();
        }else {
            $ada=false;
            $post="";
        }
        $ids = str_replace("-", " ", $request->segment(2));
        
        return view('page.type', ['post' => $post, 'posts' => $posts, 'category' => $category,'type' => $type, 'ada' => $ada, 'ids' => $ids, 'latest' => $latest, 'menu' => $menu, 'site' => $site]);
    }
    public function search(Request $request){
        // dd($request);
        $search = $request->search;
        return redirect()->route('searchpost', $search);
        // return dd($post);
    }
    public function searchpost(Request $request){
        // dd($request);
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $search = $request->search;
        $post = Posts::where('content', 'like', '%'.$request->search.'%')->paginate(10);
        $ada = Posts::where('content', 'like', '%'.$request->search.'%')->exists();
        $category = Categories::latest()->limit(6)->get();
        $type = PostType::limit(6)->get();
        $latest = Posts::latest()->limit(8)->get();
        $ids = $request->search;
        $posts = Posts::latest()->limit(4)->get();
        // dd($post);
        return view('page.search', ['post' => $post, 'category' => $category,'type' => $type, 'search' => $search, 'ada' => $ada, 'latest' => $latest, 'menu' => $menu, 'site' => $site, 'ids' => $ids, 'posts' => $posts]);
        // return dd($post);
    }
    public function page($id) {
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $posts = Posts::latest()->limit(8)->get();
        $page = Pages::get()->where('slug', $id)->first();
        $ada = Pages::where('slug', $id)->exists();
        $category = Categories::latest()->limit(6)->get();
        // return $page;
        if ($ada) {
            return view('page.pagepreview', ['page' => $page, 'posts' => $posts, 'menu' => $menu, 'site' => $site, 'category' => $category]);
        }else {
            $posts = Posts::latest()->limit(8)->get();
            return view('page.previewnull', ['posts' => $posts, 'menu' => $menu, 'site' => $site, 'category' => $category]);
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
        return redirect('/contactus')->with('success', 'Your Request Been Sent');
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
        dd($request->segment(2));
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

    
    public function video(){
        $site = SiteSetting::find(1);
        $menu = Menu::all();
        $menuaktif = 'publikasi';
        $urlchannel = "UCDbqsdODC-H1Pd0MAILsAcQ";
        $keyapi = "AIzaSyCyxseX1V1eQJQwbhEe7c8OwcFTo7Cy-VE";

        $result = $this->get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id='.$urlchannel.'&key='.$keyapi);
        // dd($result);
        $youtubeprofilepicture = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
        $youtubeprofiletitle = $result['items'][0]['snippet']['title'];
        $youtubesubscribers = $result['items'][0]['statistics']['subscriberCount'];

        $urllatestvideo = 'https://www.googleapis.com/youtube/v3/search?key='.$keyapi.'&channelId='.$urlchannel.'&maxResults=8&type=video&order=date&part=snippet';

        $result = $this->get_CURL($urllatestvideo);
        if ($result['items']) {
            $i=0;
            foreach ($result['items'] as $hasil) {
                $urllatestvideos[$i] = $hasil['id']['videoId'];
                $i++;
            }
        }else {
            $urllatestvideos[0] = "";
            $urllatestvideos[1] = "";
        }

        // dd($urllatestvideos);
        return view('page.video', [
            'youtubeprofilepicture' => $youtubeprofilepicture, 
            'youtubeprofiletitle' => $youtubeprofiletitle, 
            'youtubesubscribers' => $youtubesubscribers, 
            'urllatestvideos' => $urllatestvideos, 
            'urlchannel' => $urlchannel, 
            'latestvid' => $result, 
            'menu' => $menu, 
            'menuaktif' => $menuaktif, 
            'site' => $site]);
    }

    private function get_CURL($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    
        $result = curl_exec($curl);
        curl_close($curl);
    
        return $result = json_decode($result, true); 
      }
}
