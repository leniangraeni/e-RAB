@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">e-RAB</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center"><a href="{{route ('database.create')}}" class="btn btn-large btn-primary openbutton" role="button">Database Harga</a></div>
                    <div class="text-center"><a href="# " class="btn btn-large btn-primary openbutton" role="button">Buat RAB</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
