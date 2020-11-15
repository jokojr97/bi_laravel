<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
	protected $table = 'sub_menus';
    protected $fillable = ['name', 'slug', 'url', 'menu_id'];
    
    public function menus()
    {
        return $this->belongsTo('App\Menu');
    }
}
