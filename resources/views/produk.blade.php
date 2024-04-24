@extends('layouts.navbar')

@section('content')
<style>

    * {
        text-transform: capitalize
    }
                /* Efek hover pada kartu */
                .card:hover {
                    transition: transform 0.3s; /* Efek transisi selama 0.3 detik */
                }

                * {
                    transition: .5s;
                    border: none !important;
                    
                }

                img {
                      border: 8px double rgba(73, 63, 186, 0.205);
                }

                

   
                
                
                /* Menambahkan teks "Detail" di tengah gambar saat dihover */
                .card:hover::after {
                    content: "Detail";
                    position: absolute;
                /* justify-content: center */
                    cursor: pointer;
                

                
                    
                    background-color: rgba(0, 0, 0, 0.5);
                    color: white;
                    padding: 5px 10px;
                    border-radius: 5px;
                }
                .card img {
                max-width: 100%;
                max-height: 100%;
            }

</style>


<div class=" p-3 mb-3 bg-light rounded" style="display: flex;gap: 10px;align-items: center">
<i style="font-size: 40px;font-weight:500;color: rgb(105, 136, 179)" class='bx bxl-product-hunt'></i>
    <h5 style="color: var(--sub-primary)"><b>Halaman Produk</b></h5>
</div>



        <div style="display: flex; align-items: center; justify-content: space-between">

    <!-- Tambah Produk -->
    <a style="display: flex; gap: 5px; list-style: none !important; width: 15.5%; text-decoration: none; align-items: center;" href="/produk/tambah">
        <i style="color: var(--primary); font-size: 1.7rem;" class='bx bxs-user-plus ml-3'></i>
        <p style="display: block; margin: 0; color: var(--primary); font-weight: bold">Tambah produk</p>
    </a>

    <!-- Form Pencarian Produk -->
    <form action="/produk/cari" method="GET">
        <div class="input-group" style="display: flex; align-items: center; gap: 10px">
            <input style="border-radius: 12px; border: 2px solid var(--sub-primary) !important" autocomplete="off" type="text" class="form-control" name="cari" placeholder="Cari produk .." value="{{ old('cari') }}">
            <div class="input-group-append" style="width: 50px; height: 33px">
                <button class="btn" type="submit" style="border-radius: 20px; border: 2px solid var(--sub-primary) !important">
                    <i class="bx bx-search"></i>
                </button>
            </div>
        </div>
    </form>

</div>




<div class="row mt-3">
    <div style="width: 98%;margin: auto" class="row mt-3" style="text-transform: capitalize;">
     @foreach($produk as $p)
    <div class="col-6 col-md-4 col-lg-3 mb-3" >
        <div class="card rounded" style="border-radius: 10px !important; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);border: 8px double rgba(73, 63, 186, 0.205) !important;">
            <a style="border-radius:10px " href="produk/detail/{{$p->nama_produk}}" class="detail-link">
                <img style="border-bottom: 1px solid rgba(90, 90, 90, 0.175) !important;  border: 8px double rgba(73, 63, 186, 0.205) !important" width="20%" src="{{ asset('uploads/' .$p->foto_produk)}}" class="card-img-top" alt="">
            </a>
            <div class="card-body ">
                <h5 class="card-title" style="color: var(--sub-primary);font-weight:bold ">{{ $p->nama_produk }}</h5>
                
          <p class="card-text">Kategori: {{ optional($p->kategori)->nama }}</p>

                
                <p class="card-text">Harga {{ $p->harga_produk }}</p>
                <p class="card-text">Stok {{ $p->stok_produk }}</p>
                
                <div class="card-footer">
                    <span style="display: flex;justify-content: center;gap: 20px">
                        <a href="/produk/edit/{{$p->id}}">
                            <i style="color: var(--primary);font-size: 1.7rem" class='bx bxs-edit-alt'></i>
                        </a>
                        <a href="/produk/hapus/{{ $p->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                            <i style="color: var(--primary);font-size: 1.7rem" class='bx bxs-trash'></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endforeach

    </div>
</div>

@endsection
