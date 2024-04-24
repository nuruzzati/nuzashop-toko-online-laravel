@extends('layouts.navbar')

@section('content')

<style>
    /* Gaya CSS Anda di sini */
  tr th:first-child {
        border-top-left-radius: 10%;
        border-bottom-left-radius: 10%;
    }
  tr th:last-child {
        border-top-right-radius: 10%;
        border-bottom-right-radius: 10%;
    }

th {
    background-color: rgb(228, 234, 255);
    color: var(--primary);
    border: none !important;
    font-weight: bold;
    }

     a:hover {
        list-style: none;
    }

       


    </style>

<div class=" p-3 mb-3 bg-light rounded" style="display: flex;gap: 10px;align-items: center">
<i style="font-size: 40px;font-weight:500;color: rgb(105, 136, 179)" class='bx bxs-category'></i>
    <h5 style="color: var(--sub-primary)"><b>Halaman pelanggan</b></h5>
</div>


</a>

<table style="width: 98%;text-align: center;margin: auto"  class="table mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama pelanggan</th>
            <th scope="col">Email pelanggan</th>
            <th scope="col">Telepon pelanggan</th>
            <th scope="col">Foto pelanggan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $counter = 1;
        @endphp
        @foreach($pelanggan as $p)
        <tr>
            <td scope="row">{{ $counter++ }}</td>
            <td>{{ $p->nama_pelanggan }}</td>
            <td>{{ $p->email_pelanggan }}</td>
            <td>{{ $p->telepon_pelanggan }}</td>
            <td>{{ $p->foto_pelanggan }}</td>
            <td style="display: flex;justify-content: center;gap: 20px">
                <a href="/pelanggan/detail/{{ $p->id }}">
                <i style="color: var(--primary);font-size: 1.7rem" class='bx bx-trash'></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection






