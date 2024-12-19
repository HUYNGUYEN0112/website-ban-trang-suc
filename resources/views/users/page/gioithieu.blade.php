@extends('users.layout')
@section('title','Giới thiệu')
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
                    <h2>Giới thiệu website bán trang sức</h2>
                    <div class="space20">&nbsp;</div>
                    <p> Chào mừng bạn đến với website, nơi cung cấp những bộ sưu tập trang sức sang trọng và tinh tế, được thiết kế dành riêng cho những ai yêu thích sự hoàn hảo và đẳng cấp. Với sự đa dạng về mẫu mã, từ những chiếc nhẫn, dây chuyền, bông tai cho đến các sản phẩm tùy chỉnh theo yêu cầu, chúng tôi cam kết mang đến cho bạn những sản phẩm trang sức chất lượng cao, được chế tác tỉ mỉ từ nguyên liệu quý giá. Mỗi món trang sức tại website không chỉ là một món quà tuyệt vời mà còn là biểu tượng của vẻ đẹp và phong cách cá nhân. Hãy khám phá và tìm kiếm những món trang sức hoàn hảo cho mình tại website , nơi mà vẻ đẹp luôn được tôn vinh. </p>
                    <div class="space20">&nbsp;</div>

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



