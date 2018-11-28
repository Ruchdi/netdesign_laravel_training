<!-- create.blade.php -->
@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>{{$title}}</h1>
    </div>
    <div class="col-md-4">
      <div class="float-right">
        <a href="/user" class="btn btn-info">Home</a>
      </div>
    </div>
  </div>
  <form method="post" action="{{url('user')}}">
    {{csrf_field()}}
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Name" name="name">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Email" name="email">
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Password" name="password">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary" value="submit">
    </div>
  </form>
@endsection
