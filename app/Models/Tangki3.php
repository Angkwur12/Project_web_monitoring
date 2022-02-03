<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tangki3 extends Model
{
    use HasFactory;
    
    protected $table = "tangki3";
    protected $fillable = [
    	
        'tanggal_cek',       
        'tinggi_cairan',
        'volume_cairan',
        'suhu_cairan',       
    ];
}
