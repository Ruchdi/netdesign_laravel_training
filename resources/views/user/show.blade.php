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
    <div class="col-md-12">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{URL::asset('/img/FaceMan.png')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$user->name}}</h5>
          <p class="card-text"><b>Email:</b> {{$user->email}}</p>
          <p class="card-text"><b>Created:</b> {!!date("d/m/Y", strtotime($user->created_at))!!}</p>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
  </div>
@endsection
