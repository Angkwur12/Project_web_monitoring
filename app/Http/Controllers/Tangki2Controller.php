<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\tangki2;

class Tangki2Controller extends Controller
{
    //Pengaturan yang ada dibagian Admin
    public function tampil(){
        $halaman = 'tangki2';
        $tangki2 = Tangki2::all();
        $jumlah_artikel = Tangki2::count();
        return View('tangki2.tampil', compact('halaman','tangki2','jumlah_artikel') );
    }


    public function tambah()
    {
        return view('tangki2.tambah');
    }

    public function proses_tambah(Request $request)
    {
        $this->validate($request, [
            'tanggal_cek' => 'required',
            'tinggi_cairan' => 'required',
            'volume_cairan' => 'required',
            'suhu_cairan' => 'required',
        ]);

        Tangki2::create
        ([
            'tanggal_cek' => $request -> tanggal_cek,
            'tinggi_cairan' => $request -> tinggi_cairan,
            'volume_cairan' => $request -> volume_cairan,
            'suhu_cairan' => $request -> suhu_cairan,
        ]);

        return redirect('/tangki_b');
    }

    public function edit($id)
    {
        $tangki2 = Tangki2::where('id',$id)->get();

        return View('tangki2.edit', compact('tangki2') );
    }

    public function proses_edit($id, Request $request)
    {
        $data = Tangki2::find($id);

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

        return redirect('/tangki_b');
    } 

    public function hapus($id)
    {
        $tangki2 = Tangki2::findOrFail($id);
        $tangki2 -> delete();
        return redirect('/tangki_b');
    
    }
    //Pengaturan yang ada dibagian Admin Selesai
}
