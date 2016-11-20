@extends('layouts.front')
@section('assets')
<link rel="stylesheet" type="text/css" href="{!! asset('plugins/home/css/style.css') !!}">
<script type="text/javascript" src="{!! asset('plugins/home/js/jssor.slider-21.1.6.min.js') !!}"></script>

<script type="text/javascript" src="{!! asset('plugins/home/js/index.js') !!}"></script>
<script type="text/javascript" src="{!! asset('plugins/jquery/bootstrap-tokenfield.min.js') !!}"></script>
@endsection
@section('content')
<header id="header" class="container">
    <div class="top-header">
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
                <li class="search-form-container">
                    @include('front.home.search-form')  
                </li><!--search-form header-->

                <!-- menu header -->
                <li id="menu-bar">
                    <ul class="nav navbar-nav menu-header-container">
                        <li role="presentation" class="dropdown">                    
                            <a href="" title="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" target=".female-category">
                                Nữ
                                <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                                <span class="nav-border"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
                            </a>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="" title="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" target=".male-category">
                                Nam
                                <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                                <span class="nav-border"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
                            </a>
                        </li>

                        <li class="pft">
                            <a href="" title="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Kiểu
                                <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                                <span class="nav-border"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
                            </a>
                        </li>

                        <li class="pft">
                            <a href="" title="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Màu sắc
                                <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                                <span class="nav-border"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
                            </a>
                            @include('front.productfeature.color-default-value', ['values' => $color_values])
                        </li>

                        <li class="pft">
                            <a href="" title="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Chất liệu
                                <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                                <span class="nav-border"><img src="http://i.imgur.com/kcb37oj.png" alt=""></span>
                            </a>
                            @include('front.productfeature.material-default-value', ['values' => $material_values])
                        </li>
                        <li class="pft">
                            <a href="" title="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Họa tiết
                                <span><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
                            </a>
                            @include('front.productfeature.pattern-default-value', ['values' => $pattern_values])
                        </li>
                    </ul>

                </li> <!-- menu header -->
            </ul> <!-- right header-->
        </nav> <!-- nav header -->
    </div>
</header><!-- /header -->

<!-- body -->
<section class="home-body container">
    <!-- slideshow-->
    <section class="home-body-slideshow">
        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 570px; visibility: hidden;">
            <div class="female-category category-menu-container">
                @include('front.category.female-category', ['female_categories' => $female_categories])
            </div>
            <div class="male-category category-menu-container">
                @include('front.category.male-category', ['male_categories' => $male_categories])
            </div>
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
                        @include('front.home.collection', ['collections' => $collections])
                    </ul>        
                </div>
            </aside>
        </div><!-- collection list container -->
        <div class="product-list-container">
            <div class="product-list">
                <div class="kindof-product-container clearfix">
                    <ul class="row kindof-product">
                        <li class="active" data-target="newest"><a href="javascript:void(0)"><p>MỚI NHẤT</p></a></li>
                        <li data-target="most-like"><a href="javascript:void(0)"><p>THÍCH NHIỀU NHẤT</p></a></li>
                        <li data-target="discount"><a href="javascript:void(0)"><p>SALE</p></a></li>
                        <li data-target="tendency"><a href="javascript:void(0)"><p>XU HƯỚNG</p></a></li>
                    </ul>
                </div>
                <div class="product">
                    <div class="product-container">
                        <ul class="product-item-container clearfix">
                            @include('front.product.newestproduct', ['newest_products' => $newest_products])
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
        ProductHome.init();
        
        var collection_p = $(".collection-list");
        var collection_c = $(".collection-item-container");
        var collection_id = $("#collection-total-page");
        var collection_url = "http://localhost:8000/collection?page=";
        var append_pos = $(".collection-item-container");
        Scroll.init(collection_c, collection_p, collection_id, collection_url, append_pos);
        SearchTagging.init();
    });
</script>
@endsection