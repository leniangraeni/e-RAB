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
          <div class="form-group">
            <input id="namaproject" type="text" class="form-control" name="namaproject" required autofocus>
          </div>
        </div>
        <div class="panel-heading">
          <h4>Masukkan luas bangunan:</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input id="luas" type="number" class="form-control" name="luas" required autofocus>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="sederhana">
              <input id="sederhana" type="radio" class="form-check-input" name="optradio"> Sederhana
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="menengah">
              <input id="menengah" type="radio" class="form-check-input" name="optradio"> Menengah
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label" for="mewah">
              <input id="mewah" type="radio" class="form-check-input" name="optradio"> Mewah
            </label>
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
      <div class="btn btn-primary">next</div>
    </div>
  </div>
</div>


@stop
