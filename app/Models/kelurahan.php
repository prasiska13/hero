<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    protected $fillable = ['nama_kelurahan','kode_kelurahan','id_kecamatan'];
    public $timestamps = true;

    public function kecamatan(){
        return $this->belongsTo('App\Models\kecamatan','id_kecamatan');
    }

    public function rw(){
        return $this->hasMany('App\Models\rw','id_kelurahan');
    }   
}
