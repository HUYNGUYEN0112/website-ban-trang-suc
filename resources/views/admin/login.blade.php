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
    <title>Đăng Nhập</title>
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
                    <h3> Login</h3>
                </div>
                <div class="login-form">

                    @if (count($errors) >0)
         <ul>
             @foreach($errors->all() as $error)
                 <li class="text-danger"> {{ $error }}</li>
             @endforeach
         </ul>
     @endif

     @if (session('status'))
         <ul>
             <li class="text-danger"> {{ session('status') }}</li>
         </ul>
     @endif
                    <form  action="{{ route('getLogin') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" name="txtEmail"class="form-control" placeholder="Username" required="required">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input  type="password" name="txtPassword" class="form-control" placeholder="Password" required="required">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i><a href="{{url('/login-facebook')}}">Sign in with facebook</a></button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="{{route('getdangky')}}"> Đăng Ký Tài Khoản</a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="resource/vendors/jquery/dist/jquery.min.js"></script>
    <script src="resource/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="resource/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="resource/assets/js/main.js"></script>
</body>

</html>
