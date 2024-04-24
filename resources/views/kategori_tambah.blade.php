@extends('layouts.navbar')

@section('content')
    <div class="container" style="width: 98%">
        <div class="card mt-5" style="border: none !important">
            <div class="bg-light" style="margin-right: -40px !important; display: flex; align-items: center; gap: 5px; margin-bottom: -20px">
                <i style="font-size: 2rem" class='bx bxs-book-add'></i>
                <strong>TAMBAH DATA KATEGORI</strong><br><br><br><br>
            </div>
            <div class="card-body bg-light">
                <form method="post" action="/kategori/tambah/proses" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label>Nama kategori</label>
                        <div style="display: flex; align-items: center; gap: 5px">
                            <i style="font-size: 2rem" class='bx bx-user-pin'></i>
                            <input autocomplete="off" style="border: none; border: 2px solid var(--sub-primary); width: 25%" type="text" name="nama" class="form-control" placeholder="Nama kategori">
                        </div>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Foto kategori</label>
                        <div style="display: flex; align-items: center; gap: 5px">
                            <i style="font-size: 2rem" class='bx bx-user-pin'></i>
                            <input autocomplete="off" style="border: none; border: 2px solid var(--sub-primary); width: 25%" type="file" name="foto" class="form-control" placeholder="Foto kategori">
                        </div>
                        @if($errors->has('foto'))
                            <div class="text-danger">
                                {{ $errors->first('foto')}}
                            </div>
                        @endif
                    </div>

                    
                    <div style="display: flex;">
                        <a style="display: flex; gap: 2px; list-style: none !important; width: 14.5%; text-decoration: none; align-items: center; margin-left: -10px !important" href="/kategori">
                            <i style="color: var(--primary); font-size: 1.5rem;" class='bx bxs-check-circle ml-3'></i>
                            <input style="display: block; margin: 0; color: var(--primary); font-weight: bold; border: none" class="bg-light" type="submit" value="Simpan">
                        </a>
                        <a style="display: flex; gap: 2px; list-style: none !important; width: 14.5%; text-decoration: none; align-items: center;" href="/kategori">
                            <i style="color: var(--primary); font-size: 1.5rem;" class='bx bx-arrow-back ml-3'></i>
                            <p style="display: block; margin: 0; color: var(--primary); font-weight: bold">Kembali</p>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
