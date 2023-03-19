@extends('layoutuser')
@section('body-content')
    <form enctype="multipart/form-data" action="{{url('user/ask/store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">user name</label>
            <input type="text" class="form-control" name="name_of_user" id="name_of_user" placeholder="name_of_user">
            <label for="name">img</label>
            <input type="file" class="form-control" name="img" id="img" placeholder="img">
            <label for="name">ask</label>
            <input type="text" class="form-control" name="ask" id="ask" placeholder="ask">
            <label for="name">categoty</label>
            <br>
            <select name="id_cat">
 @foreach ($cat as $cat )
<option value="{{$cat-> id }}">{{ $cat->name }}</option>
 @endforeach
            </select>

        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success col-12" value="save">
        </div>
    </form>

@endsection
