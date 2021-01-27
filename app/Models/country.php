<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $fillable = ['kode_country', 'nama_country'];
    public $timestamps = true;

    public function kasus(){
        return $this->hasMany('App\kasus','id_country');
    }
}
