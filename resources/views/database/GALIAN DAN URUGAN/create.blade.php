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
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Simpan" >
        </div>
    </form>
</div>
@endsection
