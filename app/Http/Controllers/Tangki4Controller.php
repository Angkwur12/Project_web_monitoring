<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\tangki4;

class Tangki4Controller extends Controller
{
    //Pengaturan yang ada dibagian Admin
    public function tampil(){
        $halaman = 'tangki4';
        $tangki4 = Tangki4::all();
        $jumlah_artikel = Tangki4::count();
        return View('tangki4.tampil', compact('halaman','tangki4','jumlah_artikel') );
    }


    public function tambah()
    {
        return view('tangki4.tambah');
    }

    public function proses_tambah(Request $request)
    {
        $this->validate($request, [
            'tanggal_cek' => 'required',
            'tinggi_cairan' => 'required',
            'volume_cairan' => 'required',
            'suhu_cairan' => 'required',
        ]);

        Tangki4::create
        ([
            'tanggal_cek' => $request -> tanggal_cek,
            'tinggi_cairan' => $request -> tinggi_cairan,
            'volume_cairan' => $request -> volume_cairan,
            'suhu_cairan' => $request -> suhu_cairan,
        ]);

        return redirect('/tangki_d');
    }

    public function edit($id)
    {
        $tangki4 = Tangki4::where('id',$id)->get();

        return View('tangki4.edit', compact('tangki4') );
    }

    public function proses_edit($id, Request $request)
    {
        $data = Tangki4::find($id);

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

        return redirect('/tangki_d');
    } 

    public function hapus($id)
    {
        $tangki4 = Tangki4::findOrFail($id);
        $tangki4 -> delete();
        return redirect('/tangki_d');
    
    }
    //Pengaturan yang ada dibagian Admin Selesai
}
