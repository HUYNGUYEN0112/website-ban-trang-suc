@extends('admin.theme.layout')
@section('content')
<form action="{{route("category.update", $category->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" class="form-control" name="name" value="{{$category->name}}">
   </div>
   <div class="form-group">
     <label for="image">Image:</label>
     <input type="file" class="form-control"name="image" value="{{$category->image}}">
   </div>
   <div class="form-group">
    <label for="price">Description:</label>
    <input type="text" class="form-control"name="description" value="{{$category->description}}">
  </div>
  <div class="form-group">
    <label for="content">Content:</label>
    <textarea class="form-control" id="contents" name="content">{{$category->content}}</textarea>
    <script>CKEDITOR.replace('contents');</script>
  </div>
   <button type="submit" name="btn_editcategory"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
