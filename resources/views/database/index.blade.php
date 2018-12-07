@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="card text-center" style="width:250px;height:350px;">
          <a href="{{ route('database.create') }}" class="btn btn-primary" >Tambah</a>
      </div>
            @foreach($database as $database)
                 <div class="col-sm-3">
			            <div class="card text-center" style="width:250px;height:350px;">
                        <div class="card-body">
                            <h3 class="card-title"><strong>{{$database->nama_barang}}</strong></h3>
                            <h5 class="price">Rp. {{$database->harga_barang}}</h5>
                            <h5 class="card-title text-warning">{{$database->category_barang}}</strong></h5>
                            <a href="{{ route('database.edit', $database) }}" class="btn btn-primary" >Edit</a>
                        </div>
			        </div>
                </div>
            @endforeach
    </div>
@endsection
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 100px;
  height:100px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.card button:hover {
  opacity: 0.7;
} 
</style>

