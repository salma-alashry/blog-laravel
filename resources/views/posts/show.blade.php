@extends('layouts/app')
@section('content')
<br><br><br><br>
<div class="card" style="width: 30rem;">
    <div class="card-body">
      <h5 class="card-title text-center">Title</h5>
      <h6 class="card-subtitle mb-2 text-muted text-center">{{$posts->title}}</h6>
      <p class="card-text">{{$posts->content}}</p>
      <a href="{{route('posts.create')}}" class="btn btn-primary" role="button">>Create new Post</a><br>
      <a href="{{route('posts.index')}}"  class="btn btn-primary" role="button">>Back to All Posts</a>
    </div>
  </div>
@endsection