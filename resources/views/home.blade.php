@extends('layouts.default')
@section('content')
<a href="{{route('hitung.create')}}" class=" card containercard btn">
    <img class="card-img-top">
    <div class="card-body">
      <h4 class="card-title">Buat Baru</h4>
      <p class="card-text"></p>
    </div>
</a>

<div class="col-sm-12 bg-dark">
  <h3>Project Anda</h3>
</div>
@foreach ($post as $hitung)
<div class="card containercard" style="width:400px; top:50px;">
  <div class="card-body">
  {{csrf_field()}}
    <h4 class="card-title">{{$hitung->nama_project}}</h4>
    <p class="card-text">Rumah pribadi {{$hitung->luas_bangunan}} x {{$hitung->luas_bangunan}} </p>
    <a href="" class="btn btn-primary">Lihat Detail</a>
  </div>
</div>
@endforeach
@stop
