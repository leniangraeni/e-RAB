@extends('layouts.default')
@section('content')
<div class="container container1">
    <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Kode Pekerjaan</th>
        <th>Nama Pekerjaan</th>
        <th class="text-right">Harga per Satuan (Rp)</th>
        <th>        </th>
        <th>        </th>
      </tr>
    </thead>
    <tbody>
    @foreach ($harga as $harga)
      <tr>
        <td>{{ $harga->kode_pekerjaan }}</td>
        <td>{{ $harga->nama_pekerjaan }}</td>
        <td class="text-right"><?php echo number_format($harga->harga,2,".",",")?></td>
        <td style="padding:0px;"><a href="/harga/{{$harga->id}}/edit" class="btn btn-info"style="margin:5px;" >Edit</a></td>
        <td>        </td>
      </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection