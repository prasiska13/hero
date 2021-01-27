<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rw extends Model
{
    protected $fillable = ['nama_rw','id_kelurahan'];
    public $timestamps = true;

    public function kelurahan(){
        return $this->belongsTo('App\Models\kelurahan','id_kelurahan');
    }

    public function kasus2(){
        return $this->hasMany('App\Models\kasus2','id_rw');
    }
}
