
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
<table class="table table-hover">
      <thead>
        <th>Name</th>
        <th>Email</th>
        <th >Password</th>
        <th>created Date</th>
        <th>Edit</th>
        <th>Lock</th>
        <th>Delete</th>
      </thead>
      <tbody>
        @foreach($users ?? '' as $user)
          <tr>
            <td>{{$user->name}} </td>
            <td>{{$user->email}} </td>
            <td>{{$user->password}} </td>
            <td>{{$user->created_at}} </td>
            <td><a href="{{route('user.getedit',$user->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
            <td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
            <td><a href="{{route('user.delete',$user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
          </tr>
        @endforeach
      </tbody>
  </table>
@stop
