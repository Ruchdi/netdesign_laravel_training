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
  <form method="post" action="{{action('UserController@update', $user->id)}}">
    {{csrf_field()}}
    <div class="form-group row">
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Name" name="name" value="{{$user->name}}">
      </div>
    </div>
    <div class="form-group row">
      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Telephone" name="email" value="{{$user->email}}">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
@endsection
