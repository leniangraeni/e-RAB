@extends('layouts.app')
@section('content')
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col">
        <h1>  </h1>
    </div>
    <div class="col">

    </div>
    <div class="col">

    </div>
  </div>
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col">

    </div>
    <div class="col">
      <div class="card2">
      <div class="container">
        <form>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
          <a href="{{( url('/dash'))}}">next</a>
        </form>
      </div>
      </div>
    </div>
    <div class="col">

    </div>
  </div>
</div>
@stop
