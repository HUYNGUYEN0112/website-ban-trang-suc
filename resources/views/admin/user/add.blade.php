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
        <div  class="container">
        @include('admin.theme.nav')	   
         <form action="{{route('user.postadd')}}" method="POST">
           {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="txtname">
          </div>
           <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="txtemail">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="txtpassword">
          </div>
          <button type="submit" name="btnregister"class="btn btn-primary">Thực Hiện</button>
        </form>
        </div>
	</div>
    <script src="{!! asset('admin/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('admin/js/popper.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('admin/js/main.js') !!}"></script>
  </body>
</html>