@extends('layouts.default')
@section('content')
    <a href="{{ route('hitung.create')}}" class=" card containercard btn">
        <img class="card-img-top">
            <div class="card-body">
                <h4 class="card-title">Buat Baru</h4>
                <p class="card-text"></p>
            </div>
    </a>

    <a href="{{ route('harga.index')}}" class=" card containercard btn">
        <img class="card-img-top">
            <div class="card-body">
                <h4 class="card-title">Database Harga</h4>
                <p class="card-text"></p>
            </div>
    </a>

    <div class="col-sm-12 bg-dark">
        <h3 style="text-align:center;">Project Anda</h3>
    </div>

@endsection
