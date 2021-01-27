<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    protected $fillable = ['kode_provinsi', 'nama_provinsi'];
    public $timestamps = true;

    public function kota(){
        return $this->hasMany('App\Models\kota','id_provinsi');
    }
}
