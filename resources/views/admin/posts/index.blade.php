@extends('layouts.admin')

@section('content')

<a href="{{route("admin.posts.create")}}"><button type="button" class="btn  btn-warning">add</button></a>
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Published</th>
      <th scope="col">Slug</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td class="font-weight-bold">
          {{$post->title}}
      </td>
      <td>{{$post->content}}</td>
      <td>{{$post->published}}</td>
      <td>{{$post->slug}}</td>
      <td>
        <a href="{{route("admin.posts.show", $post->id)}}"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button></a>
        <a href="{{route("admin.posts.edit", $post->id)}}"><button type="button" class="btn btn btn-info"></button><i class="bi bi-pen"></i></a>
      </td>
    </tr>
    @endforeach
@endsection

  </tbody>
</table>