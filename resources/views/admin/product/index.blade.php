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
        <a href="{{route('product.create')}}" class="btn btn-success">Thêm mới</a>
    </div>
</div>
        <table class="table table-bordered">
              <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Edit</th>
                <th>Lock</th>
                <th>Delete</th>
              </thead>
              <tbody>
                @foreach($products ?? '' as $product)
                  <tr>
                    <td><img src="{{asset('images/'. $product->image)}}" width="40" /></td>
                    <td>{{$product->name}} </td>
                    <td>{{$product->price}} </td>
                    <td>{{$product->discount}} </td>
                    <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                    <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
                    <td>
                    <form action="{{route('product.destroy', $product->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                    </form>
                  </tr>
                @endforeach
              </tbody>
          </table>
@stop
