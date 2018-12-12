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
        <th class="text-right">Jumlah Harga (Rp)</th>
        <th>        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>PEKERJAAN PERSIAPAN, GALIAN, DAN URUGAN</td>
        <td class="text-right"><?php echo number_format( $atribut['I'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>2.</td>
        <td>PEKERJAAN PONDASI DAN BETON</td>
        <td class="text-right"><?php echo number_format( $atribut['II'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>3.</td>
        <td>PEKERJAAN PASANGAN DAN PLESTERAN</td>
        <td class="text-right"><?php echo number_format( $atribut['III'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>4.</td>
        <td>PEKERJAAN LANTAI DAN DINDING</td>
        <td class="text-right"><?php echo number_format( $atribut['IV'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>5.</td>
        <td>PEKERJAAN ATAP</td>
        <td class="text-right"><?php echo number_format( $atribut['V'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>6.</td>
        <td>PEKERJAAN PLAFON</td>
        <td class="text-right"><?php echo number_format( $atribut['VI'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>7.</td>
        <td>PEKERJAAN KUSEN DAN PINTU JENDELA</td>
        <td class="text-right"><?php echo number_format( $atribut['VII'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>8.</td>
        <td>PEKERJAAN PERLENGKAPAN PINTU DAN JENDELA</td>
        <td class="text-right"><?php echo number_format( $atribut['VIII'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>9.</td>
        <td>PEKERJAAN SANITAIR</td>
        <td class="text-right"><?php echo number_format( $atribut['IX'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>10.</td>
        <td>PEKERJAAN INSTALASI AIR</td>
        <td class="text-right"><?php echo number_format( $atribut['X'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>11.</td>
        <td>PEKERJAAN INSTALASI LISTRIK</td>
        <td class="text-right"><?php echo number_format( $atribut['XI'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>12.</td>
        <td>PEKERJAAN PENGECATAN</td>
        <td class="text-right"><?php echo number_format( $atribut['XII'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td>13.</td>
        <td>PEKERJAAN PEMBERSIHAN</td>
        <td class="text-right"><?php echo number_format( $atribut['XIII'],2,".",",");?></td>
        <td>        </td>
      </tr>
      <tr>
        <td></td>
        <td>TOTAL</td>
        <td class="text-right"><b><?php echo number_format( $total,2,".",",");?></b></td>
        <td>        </td>
      </tr>
    </tbody>
  </table>
  <div class="d-flex justify-content-end">
    <a href= "{{'/home'}}" ><button type="button" class="btn btn-info">Selesai</button></a>
  </div>
</div>
@stop
