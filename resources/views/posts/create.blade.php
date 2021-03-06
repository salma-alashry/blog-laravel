@extends('layouts.app')
@section('content')
<form method="POST" action="/posts">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <textarea class="form-control" name="content" id="exampleFormControlTextarea5" rows="4"></textarea>    </div>
    
    <button type="submit"  class="btn btn-primary">Submit</button>
  </form>

@endsection