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
                        <h3 class="box-title"><b>Project Anda</b></h3>
                    </div>
                            <!-- /.box-header -->
                    <div class="box-body huruf">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>Nama Project</th>
                            <th>Luas Bangunan (m<sup>2</sup>)</th>
                            <th>Tanggal Pembuatan</th>
                            <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($hitung as $hitung)
                            <tr>
                                <td>{{ $hitung->nama_project }}</td>
                                <td>{{ $hitung->luas_bangunan }} </td>
                                <td>{{ $hitung->created_at }}</td>
                                <td><a href="/hitung/{{$hitung->id}}/detail" class="btn btn-info">Detail</a></td>
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

