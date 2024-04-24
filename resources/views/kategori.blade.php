@extends('layouts.navbar')

@section('content')

<style>
    /* Gaya CSS Anda di sini */
    tr th:first-child {
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    tr th:last-child {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    th {
        background-color: #e4eaff;
        color: var(--primary);
        border: none !important;
        font-weight: bold;
    }

    a:hover {
        list-style: none;
    }

    .product-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-evenly; /* Ubah menjadi space-around agar ada jarak di kiri dan kanan */
    }

    .product-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        width: 23%; /* Setiap kartu akan mendapat 25% dari lebar container */
        text-align: center;
        border: 8px double rgba(73, 63, 186, 0.205);
    }
    
    img {
        border: 8px double rgba(73, 63, 186, 0.205);

    }

    .product-img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
    }

    .product-info {
        padding: 10px;
    }

    .product-btn {
        background-color: #c8815f;
        color: white;
        padding: 8px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<div class="p-3 mb-3 bg-light rounded" style="display: flex; gap: 10px; align-items: center">
    <i style="font-size: 40px; font-weight: 500; color: rgb(105, 136, 179)" class='bx bxs-category'></i>
    <h5 style="color: var(--sub-primary)"><b>Halaman Kategori</b></h5>
</div>

<div style="display: flex; align-items: center; justify-content: space-between">

    <a style="display: flex; gap: 5px; list-style: none !important; width: 15.5%; text-decoration: none; align-items: center;" href="/kategori/tambah">
        <i style="color: var(--primary); font-size: 1.7rem;" class='bx bxs-user-plus ml-3'></i>
        <p style="display: block; margin: 0; color: var(--primary); font-weight: bold">Tambah Kategori</p>
    </a>
    <form action="/kategori/cari" method="GET">
        <div class="input-group" style="display: flex; align-items: center; gap: 10px">
            <input style="border-radius: 12px; border: 2px solid var(--sub-primary)" autocomplete="off" type="text" class="form-control" name="cari" placeholder="Cari kategori .." value="{{ old('cari') }}">
            <div class="input-group-append" style="width: 50px; height: 33px">
                <button class="btn" type="submit" style="border-radius: 20px; border: none; border: 2px solid var(--sub-primary)">
                    <i class="bx bx-search"></i>
                </button>
            </div>
        </div>
    </form>

</div>

<div class="product-container mt-3">
    @foreach($kategori as $k)
    <div class="product-card shadow bg-white">
        <img class="product-img" src="{{ asset('../foto_kategori/'. $k->foto_kategori) }}">
        <div class="product-info">
            <p>{{ $k->nama }}</p>              
            <div style="display: flex; justify-content: center; gap: 20px">
                <a href="/kategori/edit/{{ $k->id }}">
                    <i style="color: var(--primary); font-size: 1.7rem" class='bx bxs-edit-alt'></i>
                </a>
                <a href="/kategori/hapus/{{ $k->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                    <i style="color: var(--primary); font-size: 1.7rem" class='bx bxs-trash'></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
