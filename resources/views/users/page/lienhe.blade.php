@extends('users.layout')
@section('title','Liên Hệ')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Contacts</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
                    <a href="{{route('trang-chu')}}">Home</a> / <span>Contacts</span>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content" class="space-top-none">

			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>From liên hệ</h2>
					<div class="space20">&nbsp;</div>
					<p> Hãy điền đầy đủ thông tin bên dưới chúng tôi sẽ cố gắng phản hồi bạn sớm nhất có thể!!! </p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Your Name (required)">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Your Email (required)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Subject">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Your Message"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi thông tin <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên hệ</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title"Địa chỉ</h6>
					<p>
                        Bình Đức, Long Xuyên, An Giang<br>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Số liên hệ</h6>
					<p>
                        0357200076<br>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Email</h6>
					<p>
                        hoanghuy@gmai.com <br>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
