<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
 	protected $table = 'categories';
	protected $fillable = ['name', 'slug']; 
	 
	public function count($category){
		$cat = DB::table('posts')->where('categories', $category)->get();
		return count($cat);
	}
}
