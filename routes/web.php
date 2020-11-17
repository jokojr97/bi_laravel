<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// pages route
Route::get('/', 'PagesController@home');
Route::get('/berita', 'PagesController@news');
Route::get('/post/{news}', 'PagesController@preview');
Route::get('/page/{page}', 'PagesController@page');
Route::get('/category/{category}', 'PagesController@category');
Route::get('/type/{type}', 'PagesController@type');
Route::post('/search', 'PagesController@search')->name('searchdata');
Route::post('/contact', 'PagesController@contactstore');
Route::get('/contactus', 'PagesController@contactus');
Route::get('/post/{news}', 'PagesController@preview');
Route::get('/kegiatan/{kegiatan}', 'PagesController@kegiatanpreview');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::Post('/logout', 'HomeController@logout')->name('logout');

// route auth
// Route::get('/register', 'PagesController@notfond');
// Route::get('/daptar', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard.index')->middleware('auth', 'can:role-admin');
Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('auth', 'can:role-admin')->group(function(){

	Route::resource('/users', 'UsersController', ['except' => ['create', 'store', 'show']]);
	Route::resource('/category', 'CategoryController');
	Route::resource('/post', 'PostController');
	Route::resource('/site', 'SiteController', ['except' => ['create', 'store', 'show', 'edit']]);
	Route::resource('/page', 'AdminPageController');
	Route::resource('/type', 'PostTypeController');
	Route::resource('/kegiatan', 'KegiatanController');
	Route::resource('/contact', 'ContactController', ['except' => ['edit', 'update']]);
	Route::resource('/menu', 'MenuController', ['except' => ['show']]);
	Route::resource('/submenu', 'SubmenuController', ['except' => ['create', 'index']]);
});

Route::get('/kader/dashboard', 'KaderController@index')->name('kader.dashboard.index')->middleware('auth', 'can:role-kader');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
	\UniSharp\LaravelFilemanager\Lfm::routes();
});
