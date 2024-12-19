<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Web Bán Hàng</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{!! asset('resource/vendors/bootstrap/dist/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('resource/vendors/font-awesome/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('resource/vendors/themify-icons/css/themify-icons.css') !!}">
    <link rel="stylesheet" href="{!! asset('resource/vendors/flag-icon-css/css/flag-icon.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('resource/vendors/selectFX/css/cs-skin-elastic.css') !!}">
    <link rel="stylesheet" href="{!! asset('resource/vendors/jqvmap/dist/jqvmap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('resource/assets/css/style.css') !!}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{!! asset('resource/images/logo.png') !!}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{!!(
                    'resource/images/logo2.png') !!}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{route('welcome')}}"> <i class="menu-icon fa fa-dashboard"></i>Trang Chủ </a>
                    </li>
                    <h3 class="menu-title">Admin</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Quản Lý Sản Phẩm</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('category.index')}}">Danh Mục Sản Phẩm</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{route('product.index')}}">Sản Phầm</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Quản Tài Khoản</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="glyphicon glyphicon-user "></i><a href="{{route('user.index')}}"">Tài Khoản Của Tôi</a></li>
                            <li><i class="glyphicon glyphicon-user"></i><a href="tables-data.html">Tất Cả Tài Khoản</a></li>
                            <li><i class="glyphicon glyphicon-user "></i><a href="tables-data.html">Phân Quyền</a></li>
                        </ul>
                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Bình Luận</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{route('binhluan.index')}}">Chi Tiết Bình Luận</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Quản Lý Hóa Đơn</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="">Chi Tiết Hóa Đơn</a></li>

                        </ul>
                    </li>

                    <h3 class="menu-title">Users</h3><!-- /.menu-title -->


                    <h3 class="menu-title">Tài Khoản</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('getLogout')}}">Đăng Xuất</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('getLogin')}}">Đăng Nhập</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Đăng Ký</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>



                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{!! asset('resource/images/ql.jpg')!!}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="{{ route('getLogout') }}"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>



                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
            <div id="layoutSidenav_content">
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content mt-3">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-1">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <div class="dropdown-menu-content">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="count">{{count($sanpham)}}</span>
                                </h4>
                                <p class="text-light">Sản Phẩm</p>

                                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                    <canvas id="widgetChart1"></canvas>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-2">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="dropdown-menu-content">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="count">10468</span>
                                </h4>
                                <p class="text-light">Hóa Đơn</p>

                                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                    <canvas id="widgetChart2"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-3">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                        <div class="dropdown-menu-content">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="count">{{count($taikhoan)}}</span>
                                </h4>
                                <p class="text-light">Người Dùng</p>

                            </div>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                                <canvas id="widgetChart3"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-4">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                        <div class="dropdown-menu-content">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="count">{{count($comment)}}</span>
                                </h4>
                                <p class="text-light">Bình Luận</p>

                                <div class="chart-wrapper px-3" style="height:70px;" height="70">
                                    <canvas id="widgetChart4"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/.col-->


                    <!--/.col-->



                    <!--/.col-->



                    <!--/.col-->



                    <!--/.col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h4 class="card-title mb-0">Traffic</h4>
                                        <div class="small text-muted">October 2017</div>
                                    </div>
                                    <!--/.col-->
                                    <div class="col-sm-8 hidden-sm-down">
                                        <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                                        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option1"> Day
                                                </label>
                                                <label class="btn btn-outline-secondary active">
                                                    <input type="radio" name="options" id="option2" checked=""> Month
                                                </label>
                                                <label class="btn btn-outline-secondary">
                                                    <input type="radio" name="options" id="option3"> Year
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.col-->


                                </div>
                                <!--/.row-->
                                <div class="chart-wrapper mt-4">
                                    <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                                </div>

                            </div>
                            <div class="card-footer">
                                <ul>
                                    <li>
                                        <div class="text-muted">Visits</div>
                                        <strong>29.703 Users (40%)</strong>
                                        <div class="progress progress-xs mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="hidden-sm-down">
                                        <div class="text-muted">Unique</div>
                                        <strong>24.093 Users (20%)</strong>
                                        <div class="progress progress-xs mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-muted">Pageviews</div>
                                        <strong>78.706 Views (60%)</strong>
                                        <div class="progress progress-xs mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="hidden-sm-down">
                                        <div class="text-muted">New Users</div>
                                        <strong>22.123 Users (80%)</strong>
                                        <div class="progress progress-xs mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li class="hidden-sm-down">
                                        <div class="text-muted">Bounce Rate</div>
                                        <strong>40.15%</strong>
                                        <div class="progress progress-xs mt-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <section class="card">
                            <div class="twt-feed blue-bg">
                                <div class="corner-ribon black-ribon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="fa fa-twitter wtt-mark"></div>

                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="source/images/admin.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-white display-6">Jim Doe</h2>
                                        <p class="text-light">Project Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="weather-category twt-category">
                                <ul>
                                    <li class="active">
                                        <h5>750</h5>
                                        Tweets
                                    </li>
                                    <li>
                                        <h5>865</h5>
                                        Following
                                    </li>
                                    <li>
                                        <h5>3645</h5>
                                        Followers
                                    </li>
                                </ul>
                            </div>
                            <div class="twt-write col-sm-12">
                                <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                            </div>
                            <footer class="twt-footer">
                                <a href="#"><i class="fa fa-camera"></i></a>
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                                New Castle, UK
                                <span class="pull-right">
                                    32
                                </span>
                            </footer>
                        </section>
                    </div>


                    <div class="col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Profit</div>
                                        <div class="stat-digit">1,012</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">New Customer</div>
                                        <div class="stat-digit">961</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Active Projects</div>
                                        <div class="stat-digit">770</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


        <script src="resource/vendors/jquery/dist/jquery.min.js"></script>
        <script src="resource/vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="resourcevendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="resource/assets/js/main.js"></script>
        <script src="resource/vendors/chart.js/dist/Chart.bundle.min.js"></script>
        <script src="resource/assets/js/dashboard.js"></script>
        <script src="resource/assets/js/widgets.js"></script>
        <script src="resource/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="resource/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <script src="resource/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script>
            (function($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>

    </body>

    </html>
