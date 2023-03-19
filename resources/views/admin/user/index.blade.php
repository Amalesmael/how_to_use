@extends('layout')
@section('body-content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>update</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        @forelse($admin as $admin)
      <tr>
        <td>{{$admin->id}}</td>
        <td>{{$admin->name}}</td>
        <td>{{$admin->email}}</td>
        <td>{{$admin->password}}</td>
        <td><a class="btn btn-info" href="{{url("admin/user/edit/$admin->id")}}">update</a></td>
        <td><a class="btn btn-danger" href="{{url("admin/user/delete/$admin->id")}}">delete</a></td>
      </tr>

      @empty

      <tr>
        <td class="text-center" colspan="6">not found data</td>
      </tr>
      @endforelse

    </tbody>
  </table>
<br>
<br>
<br>

  <button type="button" class="btn btn-secondary"><a href="{{ url("/logout") }}">log out</a></button>
@endsection
