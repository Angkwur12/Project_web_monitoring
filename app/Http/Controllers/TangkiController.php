<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\tangki1;

class TangkiController extends Controller
{
    //Pengaturan yang ada dibagian Admin
    public function tampil(){
        $halaman = 'tangki1';
        $tangki1 = Tangki1::all();
        $jumlah_artikel = Tangki1::count();
        return View('tangki1.tampil', compact('halaman','tangki1','jumlah_artikel') );
    }


    public function tambah()
    {
        return view('tangki1.tambah');
    }

    public function proses_tambah(Request $request)
    {
        $this->validate($request, [
            'tanggal_cek' => 'required',
            'tinggi_cairan' => 'required',
            'volume_cairan' => 'required',
            'suhu_cairan' => 'required',
        ]);

        Tangki1::create
        ([
            'tanggal_cek' => $request -> tanggal_cek,
            'tinggi_cairan' => $request -> tinggi_cairan,
            'volume_cairan' => $request -> volume_cairan,
            'suhu_cairan' => $request -> suhu_cairan,
        ]);

        return redirect('/tangki_a');
    }

    public function edit($id)
    {
        $tangki1 = Tangki1::where('id',$id)->get();

        return View('tangki1.edit', compact('tangki1') );
    }

    public function proses_edit($id, Request $request)
    {
        $data = Tangki1::find($id);

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

        return redirect('/tangki_a');
    } 

    public function hapus($id)
    {
        $tangki1 = Tangki1::findOrFail($id);
        $tangki1 -> delete();
        return redirect('/tangki_a');
    
    }
    //Pengaturan yang ada dibagian Admin Selesai
}
