@extends('layouts/app')
@section('content')
<br><br><br><br>
<div class="container">
  <div class="row">
    <div class="card" style="width: 30rem;">
      <div class="card-header">
        Post info
      </div>
      <div class="card-body">
        <span class="card-title">Title :-</span> <span>{{$posts->title}}</span><br>
        <span>Description :-</span>
        <p>{{$posts->content}}</p> <br>
        <a href="{{route('posts.create')}}" class="btn btn-primary" role="button">Create new Post</a><br>

      </div>
    </div>
  </div>
  <br><br>
  <div class="row">
  <div class="card" style="width: 30rem;">
    <div class="card-header">
      Post Creator info
    </div>
    <div class="card-body">
      <span class="card-title">Name :-</span> <span>{{$posts->user->name}}</span><br>
      <span>E-mail :-</span> <span>{{$posts->user->email}}</span><br>
      <span>Created at :-</span> <span>{{ $posts->created_at->format('l jS \\of F Y h:i:s A') }}</span><br>
    </div>
  </div>
</div>
@endsection