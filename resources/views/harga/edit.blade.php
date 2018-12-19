@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-14">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Edit Harga Satuan</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="" action="/harga/{{$harga->id}}/edit" method="post">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode Pekerjaan</label>
                  <input type="text" class="form-control" name="kode_pekerjaan" placeholder="Masukkan kode pekerjaan" value="{{$harga->kode_pekerjaan}}">
                </div>
                <div class="form-group">
                  <label>Nama Pekerjaan</label>
                  <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Masukkan nama pekerjaan" value="{{$harga->nama_pekerjaan}}">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" class="form-control" name="harga" placeholder="Masukkan harga" value="{{$harga->harga}}">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </section>
    </div>
</div>
@endsection

