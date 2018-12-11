@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('database.update', $database)}}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
        <label for="">Nama Pekerjaan :</label>
            <input type="text" class="form-control" name="nama_pekerjaan" placeholder="Nama pekerjaan" value="{{ $database->nama_pekerjaan}}">
        </div>

        <div class="form-group">
        <label for="">Biaya Pekerjaan :</label>
            <input type="number" min=0 step=0.01 class="form-control" name="harga" placeholder="Harga pekerjaan" value="{{ $database->biaya_pekerjaan}}">
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Simpan Perubahan">
        </div>
    </form>
</div>
@endsection
