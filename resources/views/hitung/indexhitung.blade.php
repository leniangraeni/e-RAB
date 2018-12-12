@extends('layouts.default')
@section('content')

<div class="container container1">
  <h2>Perkiraan RAB</h2>
  <p>Luas Bangunan: {{$luas}}</p>
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Uraian Pekerjaan</th>
        <th>Jumlah Harga (Rp)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>PEKERJAAN PERSIAPAN, GALIAN, DAN URUGAN</td>
        <td>{{ $atribut['I'] }}</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>PEKERJAAN PONDASI DAN BETON</td>
        <td>{{ $atribut['II'] }}</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>PEKERJAAN PASANGAN DAN PLESTERAN</td>
        <td>{{ $atribut['III'] }}</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>PEKERJAAN LANTAI DAN DINDING</td>
        <td>{{ $atribut['IV'] }}</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>PEKERJAAN ATAP</td>
        <td>{{ $atribut['V'] }}</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>PEKERJAAN PLAFON</td>
        <td>{{ $atribut['VI'] }}</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>PEKERJAAN KUSEN DAN PINTU JENDELA</td>
        <td>{{ $atribut['VII'] }}</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>PEKERJAAN PERLENGKAPAN PINTU DAN JENDELA</td>
        <td>{{ $atribut['VIII'] }}</td>
      </tr>
      <tr>
        <td>9.</td>
        <td>PEKERJAAN SANITAIR</td>
        <td>{{ $atribut['IX'] }}</td>
      </tr>
      <tr>
        <td>10.</td>
        <td>PEKERJAAN INSTALASI AIR</td>
        <td>{{ $atribut['X'] }}</td>
      </tr>
      <tr>
        <td>11.</td>
        <td>PEKERJAAN INSTALASI LISTRIK</td>
        <td>{{ $atribut['XI'] }}</td>
      </tr>
      <tr>
        <td>12.</td>
        <td>PEKERJAAN PENGECATAN</td>
        <td>{{ $atribut['XII'] }}</td>
      </tr>
      <tr>
        <td>13.</td>
        <td>PEKERJAAN PEMBERSIHAN</td>
        <td>{{ $atribut['XII'] }}</td>
      </tr>
      <tr>
        <td></td>
        <td>TOTAL</td>
        <td><b>{{ $total }}</b></td>
      </tr>
    </tbody>
  </table>
  <div class="d-flex justify-content-end">
    <button type="button" class="btn btn-danger">Discard</button>
    <button type="button" class="btn btn-info">Save</button>
  </div>
</div>
@stop
