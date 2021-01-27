<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasus2 extends Model
{
    protected $fillable = ['jumlah_positif','jumlah_meninggal','jumlah_sembuh','id_rw'];
    public $timestamps = true;

    public function rw(){
        return $this->belongsTo('App\Models\rw','id_rw');
    }
}
