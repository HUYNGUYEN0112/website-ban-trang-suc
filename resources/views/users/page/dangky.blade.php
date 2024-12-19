@extends('users.layout')
@section('title','Đăng Ký')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">

			<form action="{{route('signin')}}" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
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
					<div class="col-sm-6" style="color: orangered">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>


						<div class="form-block">
							<label for="email" ><b>Email*</b></label>
							<input type="email"name="email" placeholder="Nhập Email..." required>
						</div>

						<div class="form-block">
							<label for="your_last_name"><b>Tên*</b></label>
							<input type="text" placeholder="Nhập Họ Tên..." name="name" required>
						</div>
						<div class="form-block">
							<label for="adress"><b>Địa Chỉ*</b></label>
							<input type="text" placeholder="Nhập Địa Chỉ..." name="diachi" required>
						</div>
						<div class="form-block">
							<label for="phone"><b>Số Điện Thoại*</b></label>
							<input type="text" placeholder="Nhập SDT..." name="dienthoai" required>
                        </div>
                        <!--
                        <div class="form-block">
                            <label for="phone"><b>Trạng Thái</b></label>
                            <select name="trangthai">
                                <option name="trangthai">active</option>
                                <option name="trangthai">default</option>
                            </select>
                        </div>

                    -->

						<div class="form-block">
							<label for="phone"><b>Mật Khẩu*</b></label>
							<input type="password"  placeholder="Nhập Pass..."name="password" required>
						</div>
						<div class="form-block">
							<label for="phone"><b>Nhập Lại Mật Khẩu*</b></label>
							<input type="password" placeholder="Nhập Lại Pass..." name="re_password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng Ký</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
