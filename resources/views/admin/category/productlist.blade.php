@extends('admin.theme.layout')
@section('content')
        <table class="table table-hover">
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
                    <td><img src="{{asset('images/'. $product->image)}}" style="height: 250px"> </td>
                    <td>{{$product->category->name}}/{{$product->name}} </td>
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
