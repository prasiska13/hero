<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    protected $fillable = ['nama_kecamatan','kode_kecamatan','id_kota'];
    public $timestamps = true;

    public function kota(){
        return $this->belongsTo('App\Models\kota','id_kota');
    }

    public function kelurahan(){
        return $this->hasMany('App\Models\kelurahan','id_kecamatan');
    }
}
