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
      <td class="d-flex">
        <a class="m-2" href="{{route("admin.posts.show", $post->id)}}"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button></a>
        <a class="m-2" href="{{route("admin.posts.edit", $post->id)}}"><button type="button" class="btn btn btn-info"></button><i class="bi bi-pen"></i></a>
        <form action="{{route("admin.posts.destroy", $post->id)}}" method="POST">
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-danger m-2" onclick="return confirm('Are you sure wwant to delete this item?')"><i class="bi bi-trash"></i></button>
          </form>
      </td>
    </tr>
    @endforeach
@endsection

  </tbody>
</table>