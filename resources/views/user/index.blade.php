@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>{{$title}}</h1>
    </div>
    <div class="col-md-4">
      <div class="float-right">
        <a href="user/create" class="btn btn-success">Add User</a>
      </div>
    </div>
    <div class="col-md-12">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th>Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $row)
          <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td><a href="/user/{{$row->id}}&page={{$page}}" class="btn btn-warning" target="_blank">Show</a></td>
            <td><a href="{{action('UserController@edit', $row->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
              <form action="{{action('UserController@destroy', $row->id)}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $users->links() }}
    </div>
  </div>
@endsection
