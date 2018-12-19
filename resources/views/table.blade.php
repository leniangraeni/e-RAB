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
                        <h3 class="box-title"><b>Perkiraan RAB</b></h3>
                    </div>
                            <!-- /.box-header -->
                    <div class="box-body huruf">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>No.</th>
                            <th>Uraian Pekerjaan</th>
                            <th>Harga</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <th>1.</th>
                            <th>PEKERJAAN PERSIAPAN, GALIAN, DAN URUGAN</th>
                            <th class="text-right"><?php echo number_format( $hitung->A,2,".",",");?></th>
                            </tr>
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