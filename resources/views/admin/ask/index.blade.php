@extends('layout')
@section('body-content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>name</th>
        <th>img</th>
        <th>ask</th>
        <th>category</th>
        <th>update</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        @forelse($ask as $ask)
      <tr>
        <td>{{$ask->id}}</td>
        <td>{{$ask->name_of_user}}</td>
        <td><img width="100px" height="100px" src="{{ asset("img/$ask->img") }}"></td>
        <td>{{$ask->ask}}</td>
        <td>{{$ask->category->name}}</td>
        <td><a class="btn btn-info" href="{{url("admin/ask/edit/$ask->id")}}">update</a></td>
        <td><a class="btn btn-danger" href="{{url("admin/ask/delete/$ask->id")}}">delete</a></td>
      </tr>

      @empty

      <tr>
        <td class="text-center" colspan="7">not found data</td>
      </tr>
      @endforelse

    </tbody>
  </table>
<br>
<br>
<br>

  <button type="button" class="btn btn-secondary"><a href="{{ url("/logout") }}">log out</a></button>
@endsection
