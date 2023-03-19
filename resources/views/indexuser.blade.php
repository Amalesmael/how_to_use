@extends('layoutuser')
@section('body-content')

  <h1>hello
    <br>
    Be as comfortable as you are at home
  </h1>
<br>
<br>
<br>

  <button type="button" class="btn btn-secondary"><a href="{{ url("/logout") }}">log out</a></button>
@endsection
