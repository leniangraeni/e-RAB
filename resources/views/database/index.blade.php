@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Galian dan Urugan</h5>
						<div class="text-center"><a href="{{ route ('galiandanurugan')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
			</div>
         <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Instalasi Air</h5>
						<div class="text-center"><a href="{{ route ('instalasiair')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
			</div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Instalasi Listrik</h5>
						<div class="text-center"><a href="{{ route ('instalasilistrik')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Kusen Pintu dan Jendela</h5>
						<div class="text-center"><a href="{{ route ('kusendanpintu')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Lantai dan Dinding</h5>
						<div class="text-center"><a href="{{ route ('lantaidinding')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Pasangan dan Plesteran</h5>
						<div class="text-center"><a href="{{ route ('pasangandanplesteran')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Atap</h5>
						<div class="text-center"><a href="{{ route ('pekerjaanatap')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Plafon</h5>
						<div class="text-center"><a href="{{ route ('pekerjaanplafon')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Pembersihan</h5>
						<div class="text-center"><a href="{{ route ('pembersihan')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Pengecatan</h5>
						<div class="text-center"><a href="{{ route ('pengecatan')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Perlengkapan Pintu dan Jendela</h5>
						<div class="text-center"><a href="{{ route ('perlengkapanpintu')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Pondasi dan Beton</h5>
						<div class="text-center"><a href="{{ route ('pondasidanpintu')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
            <div class="col-sm-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center">Sanitair</h5>
						<div class="text-center"><a href="{{ route ('sanitair')}} " class="btn btn-outline-success" role="button">Edit</a></div>
					</div>
				</div>
		    </div>
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

