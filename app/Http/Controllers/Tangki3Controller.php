<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\tangki3;

class Tangki3Controller extends Controller
{
    //Pengaturan yang ada dibagian Admin
    public function tampil(){
        $halaman = 'tangki3';
        $tangki3 = Tangki3::all();
        $jumlah_artikel = Tangki3::count();
        return View('tangki3.tampil', compact('halaman','tangki3','jumlah_artikel') );
    }


    public function tambah()
    {
        return view('tangki3.tambah');
    }

    public function proses_tambah(Request $request)
    {
        $this->validate($request, [
            'tanggal_cek' => 'required',
            'tinggi_cairan' => 'required',
            'volume_cairan' => 'required',
            'suhu_cairan' => 'required',
        ]);

        Tangki3::create
        ([
            'tanggal_cek' => $request -> tanggal_cek,
            'tinggi_cairan' => $request -> tinggi_cairan,
            'volume_cairan' => $request -> volume_cairan,
            'suhu_cairan' => $request -> suhu_cairan,
        ]);

        return redirect('/tangki_c');
    }

    public function edit($id)
    {
        $tangki3 = Tangki3::where('id',$id)->get();

        return View('tangki3.edit', compact('tangki3') );
    }

    public function proses_edit($id, Request $request)
    {
        $data = Tangki3::find($id);

        $this->validate($request, [
            'tanggal_cek' => 'required',
            'tinggi_cairan' => 'required',
            'volume_cairan' => 'required',
            'suhu_cairan' => 'required',
        ]);

        $data-> tanggal_cek = $request-> tanggal_cek;
        $data-> tinggi_cairan = $request-> tinggi_cairan;
        $data-> volume_cairan = $request-> volume_cairan;
        $data-> suhu_cairan = $request-> suhu_cairan; 
        $data->save();

        return redirect('/tangki_c');
    } 

    public function hapus($id)
    {
        $tangki3 = Tangki3::findOrFail($id);
        $tangki3 -> delete();
        return redirect('/tangki_c');
    
    }
    //Pengaturan yang ada dibagian Admin Selesai
}
