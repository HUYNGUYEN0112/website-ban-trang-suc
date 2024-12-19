@extends('FrontEnd.layout')

@section('title', 'Products')

@section('content')
    <?php //unset(session('cart')) ?>
    <div class="container products">

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{asset('images/'. $product->image)}}" width="500" height="300" />
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ strtolower($product->description) }}</p>
                            <p><strong>Price: </strong> {{ number_format($product->price) }} đ</p>
                            <p class="btn-holder"><a href="{{ url('product/add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Thêm vào giỏ hàng</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>

@endsection