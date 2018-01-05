@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns">
    <div class="column">
      <h1 class="title">
        Manage Users
      </h1>
    </div>
    <div class="column">
      <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-add m-r-10"></i>Create New User</a>
    </div>
  </div>
  <hr>
  <div class="card">
    <div class="card-content">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Actions</th>
          </tr>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->toFormattedDateString()}}</td>
                <td><a href="{{route('users.edit', $user->id)}}" class="button is-outlined">Edit</a></td>
              </tr>
            @endforeach

          </tbody>
        </thead>
      </table>
    </div>
  </div>

</div>

@endsection