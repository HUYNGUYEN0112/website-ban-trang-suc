@extends('admin.theme.layout')
@section('content')
<div id="content">
    @if(Session::has('message'))
    <div class="alert alert-success">
      {{ Session::get('message') }}
    </div>
    @endif
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ url(Request::route()->getPrefix()) }}" class="btn btn-primary">Quản lý</a>
    </div>
</div>
<table  class="table table-bordered" style="margin-top:20px;">
  <thead>
    <th>Image</th>
    <th>Name</th>
    <th>Description</th>
    <th>Content</th>
    <th>View product</th>
    <th>Edit</th>
    <th>Lock</th>
    <th>Delete</th>
  </thead>
  <tbody>
    @foreach($cate ?? '' as $category)
      <tr>
        <td><img src="{{asset('images/'. $category->image)}}" width="60px" /></td>
        <td>{{$category->name}} </td>
        <td>{{$category->description}} </td>
        <td>{{$category->content}} </td>
        <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
        <td>
      </tr>
      @endforeach
  </tbody>
</table>
@stop

Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quis ullam nulla sit tempora incidunt pariatur consequatur unde quisquam nisi ipsum impedit recusandae, voluptatum earum asperiores temporibus iste. Assumenda, est.
