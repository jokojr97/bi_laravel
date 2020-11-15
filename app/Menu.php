<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'slug', 'url'];

    public function submenus()
    {
        return $this->hasMany('App\SubMenu');
    }
}
