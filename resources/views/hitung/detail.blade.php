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
                <div class="box-header">
                    <h3 class="box-title huruf"><b>Perkiraan RAB</b></h3>
                    <h4 class="huruf">Luas Bangunan: {{$hitung->luas}} m<sup>2</sup></h4>

                <!-- <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                    <th>No.</th>
                    <th>Uraian Pekerjaan</th>
                    <th class="text-right">Harga (Rp)</th>
                    <th></th>
                    </tr>
                    <tr>
                    <th>1.</th>
                    <th>PEKERJAAN PERSIAPAN, GALIAN, DAN URUGAN</th>
                    <th class="text-right"><?php echo number_format( $hitung->A,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>2.</th>
                    <th>PEKERJAAN PONDASI DAN BETON</th>
                    <th class="text-right"><?php echo number_format( $hitung->B,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>3.</th>
                    <th>PEKERJAAN PASANGAN DAN PLESTERAN</th>
                    <th class="text-right"><?php echo number_format( $hitung->C,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>4.</th>
                    <th>PEKERJAAN LANTAI DAN DINDING</th>
                    <th class="text-right"><?php echo number_format( $hitung->D,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>5.</th>
                    <th>PEKERJAAN ATAP</th>
                    <th class="text-right"><?php echo number_format( $hitung->E,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>6.</th>
                    <th>PEKERJAAN PLAFON</th>
                    <th class="text-right"><?php echo number_format( $hitung->F,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>7.</th>
                    <th>PEKERJAAN KUSEN DAN PINTU JENDELA</th>
                    <th class="text-right"><?php echo number_format( $hitung->G,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>8.</th>
                    <th>PEKERJAAN PERLENGKAPAN PINTU DAN JENDELA</th>
                    <th class="text-right"><?php echo number_format( $hitung->H,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>9.</th>
                    <th>PEKERJAAN SANITAIR</th>
                    <th class="text-right"><?php echo number_format( $hitung->I,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>10.</th>
                    <th>PEKERJAAN INSTALASI AIR</th>
                    <th class="text-right"><?php echo number_format( $hitung->J,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>11.</th>
                    <th>PEKERJAAN INSTALASI LISTRIK</th>
                    <th class="text-right"><?php echo number_format( $hitung->K,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>12.</th>
                    <th>PEKERJAAN PENGECATAN</th>
                    <th class="text-right"><?php echo number_format( $hitung->L,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th>13.</th>
                    <th>PEKERJAAN PEMBERSIHAN</th>
                    <th class="text-right"><?php echo number_format( $hitung->M,2,".",",");?></th>
                    </tr>
                    <tr>
                    <th></th>
                    <th>TOTAL</th>
                    <th class="text-right"><?php echo number_format( $hitung->total,2,".",",");?></th>
                    </tr>
                </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            </div>
        </div>
        </section>
    </div>
@endsection