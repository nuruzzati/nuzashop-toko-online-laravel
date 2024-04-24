<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Pelanggan;
use Barryvdh\DomPDF\PDF as DomPDF;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

   public function cetak_pdf()
    {
        $pembelian = Pembelian::all();
        
        $pdf = app('dompdf.wrapper'); // Versi Baru
        $pdf->loadView('pembelian_pdf', ['pembelian' => $pembelian]);

        // Menggunakan Response untuk mengirimkan objek PDF sebagai file download
        return response(
            $pdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="laporan-pegawai-pdf.pdf"',
            ]
        );
    }


public function produk()
{
    // Logika untuk mendapatkan data produk di sini
    $produk = Produk::all();

    return view('produk', [
        'produk' => $produk
    ]);
}


public function kategori()
{
    // Logika untuk mendapatkan data kategori di sini
    $kategori = Kategori::all();

    return view('kategori', [
        'kategori' => $kategori
    ]);
}


public function pelanggan()
{
    // Logika untuk mendapatkan data pelanggan di sini
    $pelanggan = Pelanggan::all();

    return view('pelanggan', [
        'pelanggan' => $pelanggan
    ]);
}

public function pembelian()
{
    // Logika untuk mendapatkan data pembelian di sini
    $pembelian = Pembelian::all();

    return view('pembelian', [
        'pembelian' => $pembelian
    ]);
}


public function logout(Request $request)
    {
        // Lakukan logout dan invalidasi session
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Hapus data cache dan redirect ke halaman setelah logout
        return $this->clearCacheAndRedirect('welcome');
    }

    private function clearCacheAndRedirect($redirectTo)
{
    // Hapus data cache
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    // Tambahkan script JavaScript untuk manipulasi history browser
    $clearCacheScript = "
        <script>
            window.onpageshow = function(event) {
                if (event.persisted) {
                    window.location.reload();
                }
            };

            window.onunload = function() {
                if (performance.navigation.type === 1) {
                    // 1: Navigasi melalui tombol back/forward
                    window.location.href = '" . url($redirectTo) . "';
                }
            };
        </script>
    ";

    // Return view dengan script JavaScript
    return view('logout')->with('clearCacheScript', $clearCacheScript);
}




}