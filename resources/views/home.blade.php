@extends('layouts.navbar')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script>
        // Periksa status login pada saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            checkLoginStatus();
        });

        function checkLoginStatus() {
            // Lakukan pemeriksaan status login di sini (misalnya, menggunakan variabel Laravel)
            var isLoggedIn = {!! auth()->check() ? 'true' : 'false' !!};

            // Jika pengguna tidak lagi login, redirect ke halaman tertentu saat tombol back ditekan
            if (!isLoggedIn) {
                window.onpopstate = function (event) {
                    // Redirect ke halaman setelah logout (ganti URL_TARGET dengan URL yang diinginkan)
                    window.location.replace('https://www.google.com/');
                };
            }
        }
</script>