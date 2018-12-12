@extends('layouts.default')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">

    </div>
    <div class="col">
      <div class="panel panel default">
        <div class="panel-heading">
          <h4>Nama Project:</h4>
        </div>
        <div class="panel-body">
        <form action="{{ route('hitung.store')}}" method="post">
        {{csrf_field()}}
          <div class="form-group">
            <input id="nama_project" type="text" class="form-control" name="nama_project" required autofocus>
          </div>
        </div>
        <div class="panel-heading">
          <h4>Masukkan luas bangunan:</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input type="number" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan">
          </div>

          <div class="form-group">
          <h4>Kualitas:</h4>
           <select name="kualitas" id="" class="form-control">
           <option value="Sedang">Menengah</option>
           <option value="Rendah">Sederhana</option>
           <option value="Tinggi">Mewah</option>

           </select>
            
        </div>
                <p>  </p>
              <div class="d-flex justify-content-end">  
              <input type="submit" class="btn btn-info" value="Hitung" >
              </div>
        </div>
      </div>
    </div>
    <div class="col">

    </div>
  </div>
  <div class="row">
    <div class="col-md-7">

    </div>
    <div class="col-md-5">

    </div>
  </div>
  <div class="row">
    <div class="col-md-7">

    </div>
    <div class="col-md-5">

    </div>
  </div>
</div>


@stop
