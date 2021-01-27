<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    protected $fillable = ['kode_kota','nama_kota','id_provinsi'];
    public $timestamps = true;

    public function provinsi(){
        return $this->belongsTo('App\Models\provinsi','id_provinsi');
    }

    public function kecamatan(){
        return $this->hasMany('App\Models\kecamatan','id_kota');
    }
}
