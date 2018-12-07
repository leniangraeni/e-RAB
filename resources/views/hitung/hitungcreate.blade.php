@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('hitung.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
        <label for="">Luas Bangunan :</label>
            <input type="number" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan">
        </div>

        <div class="form-group">
        <label for="">Luas Tanah :</label>
            <input type="number" min=0 step=0.01 class="form-control" name="luas_tanah" placeholder="Luas Tanah">
        </div>
        <div class="form-group">
        <label for="">Luas Atap :</label>
            <input type="number" min=0 step=0.01 class="form-control" name="luas_atap" placeholder="Luas Atap">
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
            <input type="submit" class="btn btn-primary" value="Hitung" >
        </div>
    </form>
</div>
@endsection