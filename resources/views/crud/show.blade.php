<!-- create.blade.php -->
@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>{{$title}}</h1>
    </div>
    <div class="col-md-12">
      <a href="/crud">Home </a>
    </div>
    <div class="col-md-12">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{URL::asset('/img/FaceMan.png')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$employees->fname." ".$employees->lname}}</h5>
          <p class="card-text"><b>Email:</b> {{$employees->email}}</p>
          <p class="card-text"><b>Telephone:</b> {{$employees->tel_no}}</p>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
