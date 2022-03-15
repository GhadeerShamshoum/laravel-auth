@extends('layouts.app')

@section('content')

    
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
    </tr>
    @endforeach
@endsection

  </tbody>
</table>