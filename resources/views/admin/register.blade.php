<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng Ký Tài Khoản </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="resource/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="resource/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="resource/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="resource/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="resource/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="resource/assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body class="bg-light">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                   <h3> Đăng Ký Tài Khoản</h3>
                </div>
                <div class="login-form">
                    <form action="{{route('postdangky')}}" method="post">
                        {{ csrf_field() }}
                        <div >
                            @if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                    @endif
                        </div>
                            <div class="form-group">
                            <label>User Name</label>
                            <input type="name" name="name" class="form-control" placeholder="User Name">
                             </div>
                              <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                              </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password"class="form-control" placeholder="Password">
                               </div>
                               <div class="form-group">
                                <label>Nhập Lại Password</label>
                                <input type="password" name="re_password"  class="form-control" placeholder="Password">
                           </div>
                                    <div class="checkbox">
                                        <label>
                                      Trạng Thái
                                       </label>
                                       <select name="trangthai">
                                           <option name="trangthai">active</option>
                                           <option name="trangthai">default</option>
                                       </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Đăng Ký</button>
                                    <div class="social-login-content">
                                        <div class="social-button">
                                            <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>
                                            <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>
                                        </div>
                                    </div>
                                        <div class="register-link m-t-15 text-center">
                                        <p>Quay Lại Đăng Nhập <a href="{{route('getLogin')}}"> Đăng Nhập</a></p>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
