<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tangki1 extends Model
{
    use HasFactory;

    protected $table = "tangki1";
    protected $fillable = [
    	
        'tanggal_cek',       
        'tinggi_cairan',
        'volume_cairan',
        'suhu_cairan',       
    ];
}
