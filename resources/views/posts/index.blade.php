@extends('layouts.app')
 @section('content')
 <a class="btn btn-success" href="{{route('posts.create')}}"role="button">Create Post</a>
<br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $index => $value)
            <tr>
            <th scope="row">{{$value['id']}}</th>
            <td>{{$value['title']}}</td>
            <td>{{$value['content']}}</td>
            <td>{{$value['created_at']}}</td>
            <td><a class="btn btn-primary" href="{{route('posts.show',['post' => $value['id'] ])}}" role="button">view</a>
            <a class="btn btn-primary" href="{{route('posts.edit',['post' => $value['id'] ])}}" role="button">Edit</a>
            <a class="btn btn-danger" href="{{route('posts.destroy',['post' => $value['id'] ])}}" role="button">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection('content')