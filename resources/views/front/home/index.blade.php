@extends('layouts.front')
@section('assets')
<link rel="stylesheet" type="text/css" href="{!! asset('plugins/home/css/style.css') !!}">
<script type="text/javascript" src="{!! asset('plugins/home/js/jssor.slider-21.1.6.min.js') !!}"></script>

<script type="text/javascript" src="{!! asset('plugins/home/js/index.js') !!}"></script>
<script type="text/javascript" src="{!! asset('plugins/jquery/jquery.infinitescroll.min.js') !!}"></script>
@endsection
@section('content')
<header id="header" class="container">
	<section class="navbar-header">
		<button aria-controls="bs-navbar" aria-expanded="false" class="collapsed navbar-toggle" data-target="#bs-navbar" data-toggle="collapse" type="button">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="" title="" class="navbar-brand">
			<img src="http://i.imgur.com/qwR1IG9.png" alt="MIX-Shop" class="img-responsive">
		</a>
	</section>
	<nav class="collapse navbar-collapse" aria-expanded="false" id="bs-navbar">
		<ul class="nav navbar-nav">
			<li><a href="" title="" class="nav-acount" data-toggle="modal" data-target="#register-box"><img src="http://i.imgur.com/JDTpXUG.png" alt="MIX-register"></a></li>
            <li><a href="" title="" class="nav-acount"><img src="http://i.imgur.com/XiBWZuO.png" alt="MIX-login"></a></li>
		</ul>
        <!-- Modal -->
        <div class="modal fade" id="register-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            @include('front.home.register-form')
        </div>
        <div class="modal fade" id="phone-number-register-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            @include('front.home.phone-number-register-form')
        </div><!-- Modal -->
        <!-- right header-->
		<ul class="nav navbar-nav navbar-right">

            <!--search-form header-->
			<li class="search-form">
				<form action="searching.php" method="get" accept-charset="utf-8" class="row">
					<input type="text" name="" class="col-xs-11" placeholder="Tìm kiếm sản phẩm">
                    <input type="submit" class="btn col-sm-1 col-xs-1" value="">
				</form>	
            </li><!--search-form header-->

            <!-- menu header -->
            <li id="menu-bar">
                <ul class="nav navbar-nav">
                    <li role="presentation" class="dropdown">                    
                        <a href="" title="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Shop
                            <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                            <span class="nav-border"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-header">
                            <li><a href="" title="">something</a></li>
                            <li><a href="" title="">something</a></li>
                            <li><a href="" title="">something</a></li>
                            <li><a href="" title="">something</a></li>
                            <li><a href="" title="">something</a></li>
                        </ul>
                    </li>

                    <li role="presentation">
                        <a href="" title="">
                            Trang phục
                            <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                            <span class="nav-border"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
                        </a>
                    </li>

                    <li>
                        <a href="" title="">
                            Màu sắc
                            <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                            <span class="nav-border"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
                        </a>
                    </li>

                    <li>
                        <a href="" title="">
                            Chất liệu
                            <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                            <span class="nav-border"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
                        </a>
                    </li>

                    <li>
                        <a href="" title="">
                            Họa tiết
                            <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                        </a>
                    </li>
                </ul>

            </li> <!-- menu header -->
		</ul> <!-- right header-->
	</nav> <!-- nav header -->
</header><!-- /header -->

<!-- body -->
<section class="home-body container">
    <!-- slideshow-->
    <section class="home-body-slideshow">
        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 570px; visibility: hidden;">

            <!-- header bottom menu -->
            <section id="home-body-menu">
                <ul class="nav navbar-nav">
                    <li><a href="" title="">TRANG CHỦ</a></li>
                    <li><a href="" title="">SHOP</a></li>
                    <li><a href="" title="">BỘ SƯU TẬP</a></li>
                    <li>
                        <a href="" title="" class="dropdown-toggle" data-toggle="dropdown" href="" aria-expanded="false">
                            ĐỊA ĐIỂM
                            <span style="margin-left:5px"><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                        </a>
                        <ul class="dropdown-menu home-body-menu">
                            <li><a href="" title="">Hà Nội</a></li>
                            <li><a href="" title="">TP. HCM</a></li>
                            <li><a href="" title="">Đà Nẵng</a></li>
                        </ul>
                    </li>
                    <li><a href="" title="">NAM</a></li>
                    <li><a href="" title="">NỮ</a></li>
                </ul>
            </section><!-- end header bottom menu -->

            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 570px; overflow: hidden;" class="slideshow">
                <div data-p="225.00" style="display: none;">
                    <div class="row slide-2">
                        <div class="col-md-6 col-xs-6">
                            <img data-u="image" src="http://i.imgur.com/ErEelvp.jpg" />
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <img data-u="image" src="http://i.imgur.com/EFBjjXM.jpg" style="width:100%;">
                        </div>
                     </div>
                </div>
                <div data-p="225.00" style="display: none;">
                    <div class="row slide-4">
                        <div class="col-md-6 col-xs-6">
                            <img data-u="image" src="http://i.imgur.com/ErEelvp.jpg" />
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="row col-md-12 col-xs-12">
                                <div class="col-md-6 col-xs-6"><img src="http://i.imgur.com/4BWKhkc.jpg" alt=""></div>
                                <div class="col-md-6 col-xs-6"><img src="http://i.imgur.com/yvh0xU1.jpg" alt=""></div>
                            </div>
                            <div class="row col-md-12 col-xs-12">
                                <img src="http://i.imgur.com/xul9n6y.jpg" alt="">
                            </div>
                        </div>
                     </div>
                </div>
                <div data-p="225.00" style="display: none;">
                    <div class="row slide-4">
                        <div class="col-md-6 col-xs-6">
                            <img data-u="image" src="http://i.imgur.com/ErEelvp.jpg" />
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="row col-md-12 col-xs-12">
                                <div class="col-md-6 col-xs-6"><img src="http://i.imgur.com/4BWKhkc.jpg" alt=""></div>
                                <div class="col-md-6 col-xs-6"><img src="http://i.imgur.com/yvh0xU1.jpg" alt=""></div>
                            </div>
                            <div class="row col-md-12 col-xs-12">
                                <img src="http://i.imgur.com/xul9n6y.jpg" alt="">
                            </div>
                        </div>
                     </div>
                </div>
                <div data-p="225.00" style="display: none;">
                    <div class="row slide-4">
                        <div class="col-md-6 col-xs-6">
                            <img data-u="image" src="http://i.imgur.com/ErEelvp.jpg" />
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="row col-md-12 col-xs-12">
                                <div class="col-md-6 col-xs-6"><img src="http://i.imgur.com/4BWKhkc.jpg" alt=""></div>
                                <div class="col-md-6 col-xs-6"><img src="http://i.imgur.com/yvh0xU1.jpg" alt=""></div>
                            </div>
                            <div class="row col-md-12 col-xs-12">
                                <img src="http://i.imgur.com/xul9n6y.jpg" alt="">
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:-10px;width:40px;height:58px;" data-autocenter="2"></span>
        </div><!-- #endregion Jssor Slider End -->
    </section><!-- slideshow -->
	<div class="home-body-content clearfix">
        <!-- collection list container -->
		<div class="collection-list-container">
			<aside class="collection-list">
				<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse sidebar-navbar-collapse">
                    <ul class="nav navbar-nav collection-item-container">
                        @include('front.home.collection')
                    </ul>        
                </div>
			</aside>
		</div><!-- collection list container -->
        <div class="product-list-container">
            <div class="product-list">
                <ul class="nav nav-pills nav-justified row">
                    <li class="active"><a href="#newest-product" data-toggle="tab">MỚI NHẤT</a></li>
                    <li><a href="#most-like-product" data-toggle="tab">THÍCH NHIỀU NHẤT</a></li>
                    <li><a href="#discount-product" data-toggle="tab">SALE</a></li>
                    <li><a href="#tendency-product" data-toggle="tab">XU HƯỚNG</a></li>
                </ul>
                <div class="tab-content product">
                    <div class="tab-pane in active product-container" id="newest-product">
                        <ul class="clearfix product-item-container row">
                            @include('front.product.newestproduct')
                        </ul>
                    </div>
                    <div class="tab-pane product-container" id="most-like-product">
                        <ul class="clearfix product-item-container row">
                            @include('front.product.most-like-product')
                        </ul>
                    </div>
                    <div class="tab-pane product-container" id="discount-product">
                        <ul class="clearfix product-item-container row">
                            @include('front.product.discount-product')
                        </ul>
                    </div>
                    <div class="tab-pane product-container" id="tendency-product">
                        <ul class="clearfix product-item-container row">
                            @include('front.product.tendency-product')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="home-footer">
    <div class="main-footer-container container">
        <div class="row">
            <div class="col-sm-4">
                <p>LIÊN HỆ</p>
                <a href="" title=""><p>0162.784.3619</p></a>
                <a href="" title=""><p>mixvn2016@gmail.com</p></a>
                <a href="" title=""><p>KẾT NỐI</p></a>
            </div>
            <div class="col-sm-4">
                <a href="" title=""><img src="http://i.imgur.com/whiYcw8.png" alt=""></a>
                <p>Tổng hợp và đem cả thế giới thời trang sôi</p>
                <p>động đến với bạn</p>
                <p>nơi bạn có thể tìm thấy bất kỳ món đồ nào</p>
                <p>một cách CHÍNH XÁC, NHANH CHÓNG, VÀ ƯNG Ý NHẤT.</p>
            </div>
            <div class="col-sm-4">
                <p>FIND US ON</p>
                <div class="contact-container row">
                    <div class="col-xs-12">
                        <div class="facebook-contact contact">
                            <a href="" title=""><img src="http://i.imgur.com/T7EQIQ7.png" alt=""></a>
                        </div>
                        <div class="instagram-contact contact">
                            <a href="" title=""><img src="http://i.imgur.com/vLop4mN.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="mix-contact contact">
                            <a href="" title=""><img src="http://i.imgur.com/NG7VQAP.jpg" alt=""></a>
                        </div>
                        <div class="zalo-contact contact">
                            <a href="" title=""><img src="http://i.imgur.com/BbdRLJm.png" alt=""></a>
                        </div>
                        <div class="youtube-contact contact">
                            <a href="" title=""><img src="http://i.imgur.com/BgqGlMO.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        var newest_product_p = $(".product");
        var newest_product_c = $("#newest-product");
        
        var newest_product_id = $(".newest-product-total-page:last-child");
        var newest_product_url = "http://localhost:8000/product/newest?page=";
        var append_pos = $("#newest-product > ul");
        Scroll.init(newest_product_c, newest_product_p, newest_product_id, newest_product_url, append_pos);
        $('.nav-pills a').click( function(){
            switch($(this).attr("href")) {

                case "#newest-product" : {
                    var newest_product_p = $(".product");
                    var newest_product_c = $("#newest-product");
                    
                    var newest_product_id = $(".newest-product-total-page:last-child");
                    var newest_product_url = "http://localhost:8000/product/newest?page=";
                    var append_pos = $("#newest-product > ul");
                    Scroll.init(newest_product_c, newest_product_p, newest_product_id, newest_product_url, append_pos);
                    break;
                }

                case "#most-like-product" : {
                    var most_like_product_p = $(".product");
                    var most_like_product_c = $("#most-like-product");
                    
                    var most_like_product_id = $(".most-like-product-total-page:last-child");
                    var most_like_product_url = "http://localhost:8000/product/most-like?page=";
                    var append_pos = $("#most-like-product > ul");
                    Scroll.init(most_like_product_c, most_like_product_p, most_like_product_id, most_like_product_url, append_pos);
                    break;
                }

                case "#discount-product" : {
                    var discount_product_p = $(".product");
                    var discount_product_c = $("#discount-product");
                    
                    var discount_product_id = $(".discount-product-total-page:last-child");
                    var discount_product_url = "http://localhost:8000/product/discount?page=";
                    var append_pos = $("#discount-product > ul");
                    Scroll.init(discount_product_c, discount_product_p, discount_product_id, discount_product_url, append_pos);
                    break;
                }

                case "#tendency-product" : {
                    var tendency_product_p = $(".product");
                    var tendency_product_c = $("#tendency-product");
                    
                    var tendency_product_id = $(".tendency-product-total-page:last-child");
                    var tendency_product_url = "http://localhost:8000/product/tendency?page=";
                    var append_pos = $("#tendency-product > ul");
                    Scroll.init(tendency_product_c, tendency_product_p, tendency_product_id, tendency_product_url, append_pos);
                    break;
                }
            }
        });
        
        var collection_p = $(".collection-list");
        var collection_c = $(".collection-item-container");
        var collection_id = $("#collection-total-page");
        var collection_url = "http://localhost:8000/collection?page=";
        var append_pos = $(".collection-item-container");
        Scroll.init(collection_c, collection_p, collection_id, collection_url, append_pos);
    });
</script>
@endsection