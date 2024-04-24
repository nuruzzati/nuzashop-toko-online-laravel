<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        $produk = Produk::take(10)->get();
        return view('welcome', [
            'kategori' => $kategori,
            'produk' => $produk
        ] );
    }
}
