@extends('layouts.navbar')
<style>
    input,select {
        border: none !important;
        border: 2px solid var(--sub-primary) !important;
    }

    .row {
        display: flex;
        gap: 50px;
    }
    

    * {
        text-transform: capitalize;
    }

      .upload-box {
        background: #fff;
        border-radius: 50px;
        outline: none;
    }

    ::-webkit-file-upload-button{
        color: white;
        background: var(--sub-primary);
        border-radius: 50px;
        outline: none;
        cursor: pointer;
    }


</style>
@section('content')

        <div class="container" class="bg-light" >
            <div class="card mt-5" style="border: none">
                <div class="bg-light" style="margin-left: -10px;display: flex;align-items: center;gap: 5px">
                    <i style="font-size: 2rem" class='bx bxs-book-add'></i>
                   <strong>EDIT DATA PRODUK</strong><br><br><br><br>
                </div>
                <div class="bg-light">
                
                    
                        <form method="post" action="/produk/update/{{ $produk->id }}" enctype="multipart/form-data">
                        @method('PUT')
 
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="kiri">
                        <div class="form-group">
                            <label style="margin-left: 35px">Nama</label>
                            <div style="display: flex;align-items: center;gap: 5px">
                                <i style="font-size: 2rem" class='bx bx-user-pin'></i>
                                 <input value="{{ $produk->nama_produk}}" autocomplete="off" type="text" name="nama" class="form-control" placeholder="Nama produk ..">
                            </div>
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label for="kategori" style="margin-left: 35px">Pilih Kategori</label>
                            <div style="display: flex;align-items: center;gap: 5px">
                            <i style="font-size: 2rem" class='bx bx-user-pin'></i>
                            <select name="kategori" id="kategori" class="form-control">
                                @foreach($kategori as $k)
                                    <option value="{{ $k->id }}" {{ $produk->kategori_id == $k->id ? 'selected' : '' }}>
                                        {{ $k->nama }}
                                    </option>
                                @endforeach
                            </select>
                            </div>

                            @if($errors->has('kategori'))
                                <div class="text-danger">
                                    {{ $errors->first('kategori') }}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <label style="margin-left: 35px">harga</label>

                            <div style="display: flex;align-items: center;gap: 5px">
                                <i style="font-size: 2rem" class='bx bx-purchase-tag'></i>
                                 <input value="{{ $produk->harga_produk}}" autocomplete="off" name="harga" class="form-control" placeholder="harga produk .."></input>
                            </div>
 
                             @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label style="margin-left: 35px">berat</label>

                        <div style="display: flex;align-items: center;gap: 5px">
                            <i style="font-size: 2rem" class='bx bx-bold'></i>
                            <input value="{{ $produk->berat_produk}}" autocomplete="off" name="berat" class="form-control" placeholder="berat produk .."></input>
                        </div>    
 
                             @if($errors->has('berat'))
                                <div class="text-danger">
                                    {{ $errors->first('berat')}}
                                </div>
                            @endif
 
                        </div>
                        </div>


                        <div class="kanan">
                        <div class="form-group">
                            <label style="margin-left: 35px">foto</label>

                        <div style="display: flex;align-items: center;gap: 5px">
                            <i style="font-size: 2rem" class= 'bx bx-images'></i>
                            <input value="{{ $produk->foto_produk}}" autocomplete="off" type="file" name="foto" class="form-control upload-box" placeholder="foto produk .."></input>
                        </div>    
 
                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label style="margin-left: 35px">deskripsi</label>

                        <div style="display: flex;align-items: center;gap: 5px">
                            <i style="font-size: 2rem" class='bx bx-message-square-detail'></i>
                            <input value="{{ $produk->deskripsi_produk}}" autocomplete="off" name="deskripsi" class="form-control" placeholder="deskripsi produk .."></input>
                        </div>
                            
                             @if($errors->has('deskripsi'))
                                <div class="text-danger">
                                    {{ $errors->first('deskripsi')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label style="margin-left: 35px">stok</label>

                        <div style="display: flex;align-items: center;gap: 5px">
                            <i style="font-size: 2rem" class='bx bx-pencil'></i>
                            <input value="{{ $produk->stok_produk}}" autocomplete="off" name="stok" class="form-control" placeholder="stok produk .."></input>
                        </div>
 
                             @if($errors->has('stok'))
                                <div class="text-danger">
                                    {{ $errors->first('stok')}}
                                </div>
                            @endif
 
                        </div>
                        </div>
                        </div>
 
                        
                        <div style="display: flex;margin-top: 10px;margin-left: -20px">
                     <a style="display: flex; gap: 2px; list-style: none !important;width: 14.5%; text-decoration: none; align-items: center;" href="/kategori">
                    <i style="color: var(--primary); font-size: 2rem;" class='bx bxs-check-circle ml-3'></i>
                    <input autocomplete="off" style="display: block; margin: 0;color: var(--primary);font-weight: bold;border: none !important" class="bg-light" type="submit" value="Simpan">
                </a>
                  <a style="display: flex; gap: 2px; list-style: none !important;width: 14.5%; text-decoration: none; align-items: center;" href="/produk">
                    <i style="color: var(--primary); font-size: 2rem;" class='bx bx-arrow-back ml-3'></i>
                    <p style="display: block; margin: 0;color: var(--primary);font-weight: bold">Kembali</p>
                </a>
                </div>
 
                    </form>
 
                </div>
            </div>
        </div>

    
@endsection












