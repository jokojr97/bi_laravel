<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
	protected $fillable = [
		'title', 
		'content', 
		'feature_image', 
		'author', 
		'keywords',
		'exercipt',
		'status', 
		'slug',
		'language',
		'lokasi',
		'lat',
		'long',
		'published_at'
	];

    public function attachments()
    {
        return $this->hasMany('App\KegiatanAttachment');
    }
}
