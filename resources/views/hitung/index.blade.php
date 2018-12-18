@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
               @foreach ($hitung as $hitung)
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $hitung->nama_project}}</div>

                        <div class="panel-body">
                            <p> {{ $hitung->luas_bangunan }} </p>
                            <p> {{ $hitung->kualitas}} </p>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </div>
@endsection