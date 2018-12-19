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
              <h3 class="box-title"><b>Buat RAB Baru</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('hitung.store')}}" method="post">
            {{csrf_field()}}
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Project</label>
                  <input type="text" class="form-control" name="nama_project" placeholder="Nama Project Anda">
                </div>
                <div class="form-group">
                  <label>Luas Bangunan</label>
                  <input type="decimal" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan">
                </div>
                <div class="form-group">
                  <label>Kualitas</label>
                  <select name="kualitas" id="" class="form-control">
                    <option value="Menengah">Menengah</option>
                    <!-- <option value="Sederhana">Sederhana</option>
                    <option value="Mewah">Mewah</option> -->
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Hitung</button>
              </div>
            </form>
        </form>
          </div>
        </section>
    </div>
</div>
@endsection