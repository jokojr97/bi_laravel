<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KegiatanAttachment extends Model
{
    protected $fillable = ['kegiatan_id', 'attachment'];

    public function kegiatans()
    {
        return $this->belongsTo('App\Kegiatan');
    }
}
