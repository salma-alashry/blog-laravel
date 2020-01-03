@extends('layouts.app')
 @section('content')
 <a class="btn btn-success" href="{{route('posts.create')}}"role="button">Create Post</a>
<br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Content</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $index => $post)
            <tr>
            <th scope="row">{{$post['id']}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post['content']}}</td>
            <td>{{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d')}}</td>
            <td><a class="btn btn-primary" href="{{route('posts.show',['post' => $post['id'] ])}}" role="button">view</a>
            <a class="btn btn-primary" href="{{route('posts.edit',['post' => $post['id'] ])}}" role="button">Edit</a></td>
            <td><form method="POST" action="/posts/{{$post['id']}}"> 
              @csrf
              @method('delete')
              <button class="btn btn-danger" type="submit" onclick="return confirm('Do you really want to delete?');">Delete</button></form> </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection('content')