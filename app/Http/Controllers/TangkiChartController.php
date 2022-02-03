<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Tangki1;
use App\Models\Tangki2;
use App\Models\Tangki3;
use App\Models\Tangki4;

use App\Charts\TangkiChart;

class TangkiChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tangki1()
    {
        $volume = Tangki1::orderBy('tanggal_cek')->pluck('volume_cairan', 'tanggal_cek');
        $tinggi = Tangki1::orderBy('tanggal_cek')->pluck('tinggi_cairan', 'tanggal_cek');
        $suhu = Tangki1::orderBy('tanggal_cek')->pluck('suhu_cairan', 'tanggal_cek');


        return view('chart_tangki.tangki', compact('volume', 'tinggi', 'suhu'));
    }

    public function tangki2()
    {
        $volume = Tangki2::orderBy('tanggal_cek')->pluck('volume_cairan', 'tanggal_cek');
        $tinggi = Tangki2::orderBy('tanggal_cek')->pluck('tinggi_cairan', 'tanggal_cek');
        $suhu = Tangki2::orderBy('tanggal_cek')->pluck('suhu_cairan', 'tanggal_cek');


        return view('chart_tangki.tangki2', compact('volume', 'tinggi', 'suhu'));
    }

    public function tangki3()
    {
        $volume = Tangki3::orderBy('tanggal_cek')->pluck('volume_cairan', 'tanggal_cek');
        $tinggi = Tangki3::orderBy('tanggal_cek')->pluck('tinggi_cairan', 'tanggal_cek');
        $suhu = Tangki3::orderBy('tanggal_cek')->pluck('suhu_cairan', 'tanggal_cek');


        return view('chart_tangki.tangki3', compact('volume', 'tinggi', 'suhu'));
    }

    public function tangki4()
    {
        $volume = Tangki4::orderBy('tanggal_cek')->pluck('volume_cairan', 'tanggal_cek');
        $tinggi = Tangki4::orderBy('tanggal_cek')->pluck('tinggi_cairan', 'tanggal_cek');
        $suhu = Tangki4::orderBy('tanggal_cek')->pluck('suhu_cairan', 'tanggal_cek');


        return view('chart_tangki.tangki4', compact('volume', 'tinggi', 'suhu'));
    }

    public function overview()
    {
        $volume = Tangki1::orderBy('tanggal_cek')->pluck('volume_cairan', 'tanggal_cek');
        $volume2 = Tangki2::orderBy('tanggal_cek')->pluck('volume_cairan', 'tanggal_cek');
        $volume3 = Tangki3::orderBy('tanggal_cek')->pluck('volume_cairan', 'tanggal_cek');
        $volume4 = Tangki4::orderBy('tanggal_cek')->pluck('volume_cairan', 'tanggal_cek');

        $tinggi = Tangki1::orderBy('tanggal_cek')->pluck('tinggi_cairan', 'tanggal_cek');
        $tinggi2 = Tangki2::orderBy('tanggal_cek')->pluck('tinggi_cairan', 'tanggal_cek');
        $tinggi3 = Tangki3::orderBy('tanggal_cek')->pluck('tinggi_cairan', 'tanggal_cek');
        $tinggi4 = Tangki4::orderBy('tanggal_cek')->pluck('tinggi_cairan', 'tanggal_cek');

        $suhu = Tangki1::orderBy('tanggal_cek')->pluck('suhu_cairan', 'tanggal_cek');
        $suhu2 = Tangki2::orderBy('tanggal_cek')->pluck('suhu_cairan', 'tanggal_cek');
        $suhu3 = Tangki3::orderBy('tanggal_cek')->pluck('suhu_cairan', 'tanggal_cek');
        $suhu4 = Tangki4::orderBy('tanggal_cek')->pluck('suhu_cairan', 'tanggal_cek');


        return view('overview.dashboard', compact('volume', 'volume2', 'volume3', 'volume4', 
        'tinggi', 'tinggi2', 'tinggi3', 'tinggi4', 
        'suhu', 'suhu2', 'suhu3', 'suhu4',));
    }

    
}
