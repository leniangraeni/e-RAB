@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    @foreach($database as $database)
         <div class="panel panel-default">
                <div class="panel-heading">
                <a>{{$database->nama_pekerjaan}}</a>
                <div class="pull-right">
                    <a href="{{ route('database.edit', $post )}}" class="btn btn-xs btn-default">Edit </a>
                    <form class= "" action="{{  route('database.destroy', $database) }}" method="post">
                        {{csrf_field()}}
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>
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

