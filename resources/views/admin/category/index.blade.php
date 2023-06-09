@extends('layout')
@section('body-content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>name</th>
        <th>update</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td><a class="btn btn-info" href="{{url("admin/category/edit/$category->id")}}">update</a></td>
        <td><a class="btn btn-danger" href="{{url("admin/category/delete/$category->id")}}">delete</a></td>
      </tr>

      @empty

      <tr>
        <td class="text-center" colspan="4">not found data</td>
      </tr>
      @endforelse

    </tbody>
  </table>
<br>
<br>
<br>

  <button type="button" class="btn btn-secondary"><a href="{{ url("/logout") }}">log out</a></button>
@endsection
