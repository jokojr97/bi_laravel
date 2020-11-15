<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
	protected $fillable = [
		'name', 
		'slug', 
		'content', 
		'layouts', 
		'author', 
		'keywords',
		'status',
		'description',
		'title'
	];
}
