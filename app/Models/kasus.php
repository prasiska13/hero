<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasus extends Model
{
    protected $fillable = ['jumlah_positif','jumlah_meninggal','jumlah_sembuh','id_country'];
    public $timestamps = true;

    public function country(){
        return $this->belongsTo('App\country','id_country');
    }
}
