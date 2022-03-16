@extends('layouts.admin')

@section('content')
<h1 class="text-center">update:{{$post->name}}</h1>
<form action="{{route("admin.posts.update", $post->id)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group col-md-12">
    <label for="title">title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="add title" value="{{old("title")??$film->title}}">
    @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group col-md-12">
    <label for="content">Content</label>
    <textarea rows="5" class="form-control @error('description') is-invalid @enderror" id="content" name="content" placeholder="add a content" >{{$post->content}}</textarea>
    @error('content')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>

 
@endsection
