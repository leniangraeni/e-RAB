@extends('layouts.default')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
    </div>

    <div class="col">
      <div class="panel panel default">
        <div class="panel-heading">
          <h4>Kode Pekerjaan:</h4>
        </div>
        <div class="panel-body">
        <form action="{{ route('harga.store')}}" method="post">
        {{csrf_field()}}
          <div class="form-group">
          <input type="text" class="form-control" name="kode_pekerjaan" placeholder="Masukkan kode pekerjaan">
          </div>
        </div>
        <div class="panel-heading">
          <h4>Nama Pekerjaan:</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Masukkan nama pekerjaan">
          </div>

        <div class="panel-heading">
          <h4>Harga:</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input type="number" class="form-control" name="harga" placeholder="Masukkan harga">
          </div>
                <p>  </p>
              <div class="d-flex justify-content-end">  
              <input type="submit" class="btn btn-info" value="Simpan" >
              </div>
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


@endsection
