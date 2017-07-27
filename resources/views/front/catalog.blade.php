@extends('layout')

@section('content')


<div class="main-wrapper">
    <div class="container">
        <div class="banner-page">
            <div class="title-page text-center">
            <h2>Каталог</h2>
            </div>
        </div>
        <div class="section-breadcrumb">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="breadcrumb">
                        <a href="#">Home</a>
                        <span>Shop sidebar</span>
                    </div>
                </div>
                <div class="col-sm-8 col-md-9">
                    <div class="fillter-product">
                        <p class="show-result">SHOWING 1–9 OF 100 RESULTS</p>
                        <div class="product-ordering">
                            <select    >
                                <option value="1">DEFAULT SORTING</option>
                                <option value="2">Sort by name</option>
                                <option value="3">Sort by price</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="row">
                <div class="main-content main-right col-md-9 col-sm-8">
                    <div class="row products">
                        @foreach ($products as $product)
                            <div class="col-sm-6 col-md-4">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="#"><img alt="" width="100%" src="{{asset('/storageP/'.$product->picture)}}"></a>
                                        {{-- <div class="product-button">
                                            <a class="compare" href="#"><i class="fa fa-exchange"></i></a>
                                            <a class="add-wishlist" href="#"><i class="fa fa-heart"></i></a>
                                            <a class="quickview" href="#"><i class="fa fa-search"></i></a>
                                            <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </div> --}}
                                    </div>
                                    <div class="info-product">
                                       {{--  <div class="star-rating">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                        </div> --}}
                                        <h3 class="title-product"><a href="#">{{ $product->name }}</a></h3>
                                        <div class="price-product">
                                            <span class="price">{{ $product->price }} BYN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <ul class="kt-pagination">
                        <li><a href="#" class="page-numbers">1</a></li>
                        <li><span class="page-numbers current">2</span></li>
                        <li><a href="#" class="page-numbers">3</a></li>
                        <li><a href="#" class="page-numbers">4</a></li>
                        <li><a href="#" class="page-numbers">5</a></li>
                        <li><a href="#" class="next page-numbers"></a></li>
                    </ul>
                </div>
                <div class="sidebar col-md-3 col-sm-4">
                    <div class="widget shop-widget widget_price_filter">
                        <form method="get" action="#">
                            <div class="price_slider_wrapper">
                                <h3 class="title-fillter">Filter</h3>
                                <div class="price_slider">
                                </div>
                                <div class="price_slider_amount">
                                    <input type="text" id="min_price" name="min_price" value="" data-min="20" placeholder="Min price" style="display: none;"/>
                                    <input type="text" id="max_price" name="max_price" value="" data-max="140" placeholder="Max price" style="display: none;"/>
                                    <button type="submit" class="kt-button button grey">Filter</button>
                                    <div class="price_label">
                                        Price: <span class="from"></span> &mdash; <span class="to"></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="widget widget-search">
                        <h3 class="widget-title">Search the blog</h3>
                        <form action="#" class="form-search">
                            <input value="" placeholder="Search" type="text">
                            <span>
                                <button class="button-search" name="submit_search" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </form>
                    </div>
                    <div class="widget widget-categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="list-cats">
                            @foreach ($categories as $category)
                                <li><a href="#">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget-fillter-color">
                        <h3 class="widget-title">Filter by size</h3>
                        <ul class="list-color">
                            <li><a href="#">Black<span>(50)</span></a></li>
                            <li><a href="#">Red<span>(15)</span></a></li>
                            <li><a href="#">Yellow<span>(7)</span></a></li>
                            <li><a href="#">Blue<span>(25)</span></a></li>
                            <li><a href="#">Green<span>(13)</span></a></li>
                            <li><a href="#">Gray<span>(75)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ss-client">
    <div class="container">
        <div class="hm-client owl-carousel" data-margin="0" data-nav="false" data-dots="false" data-items="5" data-responsive='{"0":{"items":2},"600":{"items":3},"992":{"items":4},"1200":{"items":5}}'>
            <div class="client-item">
                <a href="#"><img src="images/client-1.jpg" alt=""></a>
            </div>
            <div class="client-item">
                <a href="#"><img src="images/client-2.jpg" alt=""></a>
            </div>
            <div class="client-item">
                <a href="#"><img src="images/client-3.jpg" alt=""></a>
            </div>
            <div class="client-item">
                <a href="#"><img src="images/client-4.jpg" alt=""></a>
            </div>
            <div class="client-item">
                <a href="#"><img src="images/client-5.jpg" alt=""></a>
            </div>
            <div class="client-item">
                <a href="#"><img src="images/client-1.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>

@endsection