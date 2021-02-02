@extends('layouts.app')

@section('content')
<style type="text/css">
   .center  { text-align: center;}
   .font {font-size: 20px;}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p class="center">Selamat Datang</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="font"><p class="center">Web Ini Hasil Karya Dari Kami Kelompok 3
                    Mohon Maaf Apabila Ada Kekurangan</div>
                </div>
                <p class="center">
                    - Yosep Maulana <br>
                    - Sinta Mulya Saputri <br>
                    - Rohmatillah <br>
            </div>
        </div>
    </div>
</div>
@endsection