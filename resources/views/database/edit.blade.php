@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('database.update', $database)}}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
        <label for="">Nama Barang :</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{ $database->nama_barang}}">
        </div>

        <div class="form-group">
        <label for="">Harga Barang :</label>
            <input type="number" min=0 step=0.01 class="form-control" name="harga" placeholder="Harga Barang" value="{{ $database->harga_barang}}">
        </div>
        <div class="form-group">
        <label for="">Kualitas Barang :</label>
           <select name="categorybarang_id" id="" class="form-control" value="{{$database->databasebarang_id}}">
           <option value="Tinggi">Tinggi</option>
           <option value="Sedang">Sedang</option>
           <option value="Rendah">Rendah</option>

           </select>
            
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah">
        </div>
    </form>
</div>
@endsection
