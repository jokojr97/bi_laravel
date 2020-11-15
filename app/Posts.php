<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Categories;

class Posts extends Model
{	
	// protected $table = 'posts';
	use SoftDeletes;
	protected $fillable = [
		'title', 
		'content', 
		'feature_image', 
		'type', 
		'categories', 
		'author', 
		'keywords',
		'exercipt',
		'slug',
		'language',
		'status',
		'published_at'
	];
    public function category()
    {
        return $this->belongsTo('App\Categories', 'categories', 'id');
    }
    public function typepost()
    {
        return $this->belongsTo('App\PostType', 'type', 'id');
    }
}
