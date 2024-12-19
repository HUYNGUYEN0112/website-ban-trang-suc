<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Area</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{!! asset('api/fontawesome/css/all.css') !!}">
       
        <link rel="stylesheet" href="{!! asset('admin/css/style.css') !!}">
  </head>
  <body>
		
	<div class="wrapper d-flex align-items-stretch">
        @include('admin.theme.sidebar')	
        <div id="content">
        @include('admin.theme.nav')	   
        <div class="btn-group" role="group">
        <a href="" class="btn btn-primary">Quản lý</a>
        <a href="{{route('user.getadd')}}" class="btn btn-success">Thêm mới</a>
        </div>
        <table class="table table-hover">
              <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
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
<td><a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
<td><a href="" class="btn btn-warning"><i class="fa fa-lock"></i></a></td>
<td><a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
</tr>
@endforeach
</tbody>
          </table>

        </div>
	</div>
    <script src="{!! asset('admin/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('admin/js/popper.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('admin/js/main.js') !!}"></script>
  </body>
</html>