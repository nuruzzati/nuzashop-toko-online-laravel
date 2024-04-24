<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProdukController extends Controller
{
  public function tambah()
{
    $produk = Produk::all();
    $kategori = Kategori::all();
    return view('produk_tambah', [
        'produk' => $produk,
        'kategori' => $kategori
    ]);
}


    public function store(Request $request)
    {
        // Validasi data input
        $this->validate($request, [
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'berat' => 'required|numeric',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'deskripsi' => 'required',
            'stok' => 'required|numeric'
        ]);

        // Penanganan file foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);

            // Simpan nama file ke dalam kolom 'foto_produk'
            $request->merge(['foto_produk' => $fileName]);
        }

        // Simpan data produk ke dalam database
        Produk::create([
            'nama_produk' => $request->nama,

            'kategori_id' => $request->kategori, 

            'harga_produk' => $request->harga,
            'berat_produk' => $request->berat,
            'foto_produk' => $request->foto_produk,
            'deskripsi_produk' => $request->deskripsi,
            'stok_produk' => $request->stok
        ]);

        return redirect('/produk');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        $kategori = Kategori::all();
        return view('produk_edit', ['produk' => $produk,
        'kategori' => $kategori
    ]);
    }
    public function detail(Produk $produk)
    {
        $produk = Produk::where('nama_produk', $produk->nama_produk)->firstOrFail();
        
        return view('produk_detail', ['produk' => $produk]);
    }




    public function update($id, Request $request)
    {
        $rules = [
            'nama' => 'required',
            'kategori' => 'required',
            'foto' => 'required',
            'harga' => 'required|numeric',
            'berat' => 'required|numeric',
            'deskripsi' => 'required',
            'stok' => 'required|numeric'
        ];

        // Jika ada file foto yang diunggah, tambahkan aturan validasi untuk foto
        if ($request->hasFile('foto')) {
            $rules['foto'] = 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048';
        }

        $this->validate($request, $rules);

        // Penanganan file foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);

            $request->merge(['foto_produk' => $fileName]);
        }

        $produk = Produk::find($id);
        $produk->nama_produk = $request->nama;
        $produk->kategori_id = $request->kategori;
        $produk->harga_produk = $request->harga;
        $produk->berat_produk = $request->berat;
        $produk->foto_produk = $request->foto_produk;
        $produk->deskripsi_produk = $request->deskripsi;
        $produk->stok_produk = $request->stok;
        $produk->save();

        return redirect('/produk');

}


public function delete($id) {
    $produk = Produk::find($id);
    $produk->delete();
    return redirect('/produk');

}

public function produkByKategori($kategoriId)
{
    $kategori = Kategori::findOrFail($kategoriId);
    $produk = $kategori->produk;

    return view('produkByKategori', [
        'kategori' => $kategori,
        'produk' => $produk
    ]);
}


public function cari(Request $request)
{
    // Menangkap data pencarian
    $cari = $request->cari;

    // Mengambil data dari model Produk sesuai pencarian data
    $produk = Produk::where('nama_produk', 'like', "%" . $cari . "%")
                    ->orWhereHas('kategori', function($query) use ($cari) {
                        $query->where('nama', 'like', "%" . $cari . "%");
                    })
                    ->paginate();

    // Mengirim data produk ke view index
    return view('produk', ['produk' => $produk]);
}

}
