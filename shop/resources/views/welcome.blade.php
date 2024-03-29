@extends('layouts.default')
@section('main')
    <div id="content" class="col-sm-9">
        <!-- Slideshow Start-->
        <div class="slideshow single-slider owl-carousel">
            @foreach($slider as $slide)
                <div class="item"> <a href="{{$slide['url']}}"><img class="img-responsive" src="{{$slide['image']}}" alt="banner 1" /></a> </div>
            @endforeach
        </div>
        <!-- Slideshow End-->
        <!-- Featured محصولات Start-->
        <h3 class="subtitle">ویژه</h3>
        <div class="owl-carousel product_carousel">

            @foreach($best as $special)
            <div class="product-thumb clearfix">
                <div class="image"><a href="product.html"><img src="{{$special->image}}" alt="تیشرت آستین بلند مردانه" title="تیشرت آستین بلند مردانه" class="img-responsive" /></a></div>
                <div class="caption">
                    <h4><a href="product.html">{{$special->name}}</a></h4>
                    <p class="price"> <span class="price-new">{{$special->price}} تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">{{$special->discount}}%</span> </p>
                </div>
                <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <!-- Featured محصولات End-->
        <!-- Featured محصولات Start-->
        <h3 class="subtitle">محصولات تکنولوژی</h3>
        <div class="owl-carousel product_carousel">

            @foreach($elect as $special)
                <div class="product-thumb clearfix">
                    <div class="image"><a href="product.html"><img src="{{$special->image}}" alt="تیشرت آستین بلند مردانه" title="تیشرت آستین بلند مردانه" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="product.html">{{$special->name}}</a></h4>
                        <p class="price"> <span class="price-new">{{$special->price}} تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">{{$special->discount}}%</span> </p>
                    </div>
                    <div class="button-group">
                        <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                        <div class="add-to-links">
                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                            <button type="button" data-toggle="tooltip" title="مقایسه this محصولات" onClick=""><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <!-- Featured محصولات End-->
@endsection