@extends('layouts.navbar')

@section('content')
    <div class="container" >
        <div class="card mt-5" style="border: none">
            <div class=" bg-light">
                <i class='bx bxs-book-add'></i>
                <strong>EDIT DATA KATEGORI</strong>
            </div>
            <div class="card-body bg-light">

                <form method="post" action="/kategori/update/{{ $kategori->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Nama Kategori</label>

                            <div style="display: flex;align-items: center;gap: 5px">
                            <i style="font-size: 2rem" class='bx bx-user-pin'></i>
                        <input autocomplete="off" style="border:none;border: 2px solid var(--sub-primary);width: 25%" type="text" name="nama" class="form-control" placeholder="Nama kategori .." value="{{ $kategori->nama }}">
                            </div>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama')}}
                            </div>
                        @endif
                    </div>

                    <div style="display: flex">
                        <a style="display: flex; gap: 2px; list-style: none !important;width: 14.5%; text-decoration: none; align-items: center;" href="/kategori">
                    <i style="color: var(--primary); font-size: 1.5rem;" class='bx bxs-check-circle ml-3'></i>
                    <input style="display: block; margin: 0;color: var(--primary);font-weight: bold;border: none" class="bg-light" type="submit" value="Simpan">
                </a>

                        <a style="display: flex; gap: 2px; list-style: none !important;width: 14.5%; text-decoration: none; align-items: center;" href="/kategori">
                            <i style="color: var(--primary); font-size: 1.5rem;" class='bx bx-arrow-back ml-3'></i>
                            <p style="display: block; margin: 0;color: var(--primary);font-weight: bold">Kembali</p>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
