@extends('layouts.default')
@section('content')
    <a href="{{route('hitung.create')}}" class="btn">
      <div class="card" style="width:400px; top:10px;">
        <img class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">Buat Baru</h4>
          <p class="card-text"></p>
        </div>
      </div>
    </a>
    <a href="{{route ('database.index')}}" class="btn">
      <div class="card" style="width:400px; top:10px;">
        <img class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">Database Harga</h4>
          <p class="card-text"></p>
        </div>
      </div>
    </a>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 bg-dark">
          <h3>Project Anda</h3>
        </div>
      </div>
    </div>
    <div class="card" style="width:400px; top:10px;">
      <img class="card-img-top" src="home1.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Iwan Pamulang</h4>
        <p class="card-text">Rumah pribadi 00m x 00m</p>
        <a href="#" class="btn btn-primary">Lihat Detail</a>
      </div>
    </div>
@endsection