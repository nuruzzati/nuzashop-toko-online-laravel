@extends('layouts.navbar')

@section('content')

<style>


    .product-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 200px;
    }

    .product-card img {
        max-width: 100%;
        height: auto;
        border-bottom: 1px solid #eee;
    }

    .product-details {
        padding: 15px;
    }

    .product-title {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .product-price {
        font-size: 14px;
        color: var(--primary);
        margin-bottom: 5px;
    }

    .product-description {
        font-size: 12px;
        margin-bottom: 10px;
    }

    .product-stock {
        font-size: 12px;
        color: #555;
        margin-bottom: 10px;
    }

    .product-actions {
        display: flex;
        justify-content: space-between;
    }

    .action-button {
        padding: 8px;
        background-color: var(--primary);
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<div class="p-3 mb-3 bg-light rounded" style="display: flex;gap: 10px;align-items: center">
    <i style="font-size: 40px;font-weight:500;color: rgb(105, 136, 179)" class='bx bxs-category'></i>
    <h5 style="color: var(--sub-primary)"><b>Halaman produk</b></h5>
</div>

<a style="display: flex; gap: 5px; list-style: none !important;width: 15.5%; text-decoration: none; align-items: center;"  href="/produk">
    <i style="color: var(--primary); font-size: 1.7rem;" class='bx bx-arrow-back ml-3'></i>
    <p style="display: block; margin: 0;color: var(--primary);font-weight: bold">Kembali</p>
</a>

<div class="container">
    <div class="product-card mt-3">
        <img  src="{{ asset('uploads/' .$produk->foto_produk)}}" alt="{{ $produk->nama_produk }}">
        <div class="product-details">
            <div class="product-title">{{ $produk->nama_produk }}</div>
            <div class="product-price">Rp {{ number_format($produk->harga_produk, 0, ',', '.') }}</div>
            <div class="product-description">{{ $produk->deskripsi_produk }}</div>
            <div class="product-stock">Stok: {{ $produk->stok_produk }}</div>
            <div class="product-stock">Berat: {{ $produk->berat_produk }}</div>
            <div class="product-actions">
                <a href="/produk/edit/{{$produk->id}}">
                <i style="color: var(--primary);font-size: 1.7rem" class='bx bxs-edit-alt'></i>
                </a>
                <a href="/produk/hapus/{{ $produk->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                <i  style="color: var(--primary);font-size: 1.7rem"  class='bx bxs-trash'></i>
                </a>          
              </div>
        </div>
    </div>
</div>

@endsection
