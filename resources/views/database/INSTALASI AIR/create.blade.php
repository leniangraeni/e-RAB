@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('database.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
        <label for="">Nama pekerjaan :</label>
            <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Nama pekerjaan">
        </div>

        <div class="form-group">
        <label for="">Harga pekerjaan :</label>
            <input type="number" min=0 step=0.01 class="form-control" name="harga" placeholder="Harga pekerjaan">
        </div>
        <div class="form-group">
        <label for="">Kualitas pekerjaan:</label>
           <select name="kualitaspekerjaan_id" id="" class="form-control">
           <option value="Tinggi">Tinggi</option>
           <option value="Sedang">Sedang</option>
           <option value="Rendah">Rendah</option>

           </select>
        </label>
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Tambah" >
        </div>
    </form>
</div>
@endsection
