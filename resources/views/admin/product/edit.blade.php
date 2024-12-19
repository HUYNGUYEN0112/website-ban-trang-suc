@extends('admin.theme.layout')
@section('content')
<form action="{{route("product.update", $product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   <div class="form-group">
     <label for="idcat">Category:</label>
        <select name="idcat" class="form-control">
            @foreach ($category as $cate)
            <option value="{{$cate->id}}">{{$cate->name}}</option>

            @endforeach
        </select>
   </div>
    <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" class="form-control" name="name" value="{{$product->name}}">
   </div>
   <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control"name="image" value="{{$product->images}}" />
  </div>
   <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control"name="price" value="{{$product->price}}">
  </div>
  <div class="form-group">
    <label for="discount">Discount:</label>
    <input type="text" class="form-control"name="discount" value="{{$product->discount}}">
  </div>

  <div class="form-group">
    <label for="content">Desciption:</label>
    <textarea class="form-control" id="des" name="description">{{$product->description}}</textarea>
    <script>CKEDITOR.replace('des');</script>
  </div>

  <div class="form-group">
    <label for="content">Bảo Hành:</label>
   <select name="baohanh">
    <option name="baohanh">{{$product->baohanh}}</option>
   </select>
  </div>
  <div class="form-group" >
    <label>Sản Phẩm Mới</label>
    <select name="new" class="form-control">
         <option name="new">{{$product->new}}</option>

   </select>
</div>
  <div class="form-group">
    <label for="trangthai">Trạng Thái:</label>
    <select name="trangthai" class="form-control">
        <option >{{$product->trangthai}}</option>
  </select>
  </div>

  <div class="form-group">
    <label for="content">Content:</label>
    <textarea class="form-control" name="content">{{$product->content}}</textarea>
    <script>CKEDITOR.replace('contents');</script>
  </div>



   <button type="submit" name="btn_editproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
