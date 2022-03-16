@extends('layouts.admin')

@section('content')
<h1 class="text-center">add Post </h1>
<form action="{{route("admin.posts.store")}}" method="POST">
  @csrf
  <div class="form-group col-md-12">
    <label for="title">title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="add title" value="{{old("title")}}">
    @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group col-md-12">
    <label for="content">Content</label>
    <textarea rows="5" class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="add a content">{{old("content")}}</textarea>
    @error('content')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>

 
@endsection
