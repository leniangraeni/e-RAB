@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section> -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><b>Database Harga Satuan</b></h3>
                    </div>
                            <!-- /.box-header -->
                    <div class="box-body huruf">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>Kode Pekerjaan</th>
                            <th>Nama Pekerjaan</th>
                            <th>Harga</th>
                            <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($harga as $harga)
                            <tr>
                                <td>{{ $harga->kode_pekerjaan }}</td>
                                <td>{{ $harga->nama_pekerjaan }}</td>
                                <td class="text-right"><?php echo number_format($harga->harga,2,".",",")?></td>
                                <td><a href="/harga/{{$harga->id}}/edit" class="btn btn-info">Edit</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection