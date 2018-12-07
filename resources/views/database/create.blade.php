@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('database.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
        <label for="">Nama Barang :</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
        </div>

        <div class="form-group">
        <label for="">Harga Barang :</label>
            <input type="number" min=0 step=0.01 class="form-control" name="harga" placeholder="Harga Barang">
        </div>
        <div class="form-group">
        <label for="">Kualitas Barang:</label>
           <select name="categorybarang_id" id="" class="form-control">
           <option value="Tinggi">Tinggi</option>
           <option value="Sedang">Sedang</option>
           <option value="Rendah">Rendah</option>

           </select>
            
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah" >
        </div>
    </form>
</div>
@endsection
