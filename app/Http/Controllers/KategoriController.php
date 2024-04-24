<?php

namespace App\Http\Controllers;


use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class KategoriController extends Controller
{
public function tambah() { 
     return view('kategori_tambah'); 
}

public function tambah_proses(Request $request) {
    $this->validate($request, [
        'nama' => 'required',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    ]);

    // Penanganan file foto
    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('foto_kategori'), $fileName);
    }

    // Simpan data kategori ke dalam database
    Kategori::create([
        'nama' => $request->nama,
        'foto_kategori' => $fileName,
    ]);

 // Set flash message
   

    // Redirect ke halaman kategori
    return redirect('/kategori');

}



public function tambahselect() {
    $kategori = Kategori::all();
    return view('produk_tambah', ['kategori'=> $kategori]);
}




public function edit($id)
{
   $kategori = Kategori::find($id);
   return view('kategori_edit', ['kategori' => $kategori]);
}



public function update($id, Request $request)
{
    $this->validate($request,[
	   'nama' => 'required'
    ]);
 
    $kategori = Kategori::find($id);
    $kategori->nama = $request->nama;
    $kategori->save();
    return redirect('/kategori');
}


public function delete($id)
{
    $kategori = Kategori::find($id);

    if (!$kategori) {
        // Tambahkan logika untuk menangani ketika kategori tidak ditemukan
        return redirect('/kategori')->with('error', 'Kategori tidak ditemukan.');
    }

    $kategori->delete();

    // Simpan pesan notifikasi
    return redirect('/kategori')->with('success', 'Data berhasil dihapus.');
}


public function cari(Request $request)
{
    // Menangkap data pencarian
    $cari = $request->cari;

    // Mengambil data dari model Kategori sesuai pencarian data
    $kategori = Kategori::where('nama', 'like', "%" . $cari . "%")->paginate();

    // Mengirim data kategori ke view index
    return view('kategori', ['kategori' => $kategori]);
}

}
