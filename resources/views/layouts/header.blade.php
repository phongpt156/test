{{-- Hiển thị thông báo đăng nhập nếu chưa đăng nhập --}}

{{-- Kết thúc hiển thị thông báo đăng nhập nếu chưa đăng nhập --}}

@if(Session::has('register-status'))
<div class="modal fade" id="success-modal">
    <div class="modal-dialog" role="document" id="">
        <div class="success-box">
            <div class="success-box-container">
                <div class="success-box-title">
                    Thông báo
                </div>
                <div class="success-box-body">
                    <div class="success-box-content">
                        <div>
                            <h2>Chúc mừng bạn!</h2>
                            <h3>Bạn đã đăng ký tài khoản thành công</h3>
                            <p><i>Bạn có thể sử dụng tài khoản này để đăng nhập tất cả sản phẩm của MIX</i></p>
                            <p>
                                <strong>Lưu ý: </strong>
                                <i>Nhấn "Cập nhật" để bổ sung thêm thông tin tài khoản của bạn</i>
                            </p>
                        </div>
                    </div>
                    <div class="success-box-footer">
                        <a href="" title="" class="btn_L3">Cập nhật</a>
                        <a href="" title="" class="btn_L5" data-dismiss="modal">Đóng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@php
Session::forget('register-status');
@endphp
@endif
<header id="header" class="container">
    <div class="top-header">
        <section class="navbar-header">
            <button aria-controls="bs-navbar" aria-expanded="false" class="collapsed navbar-toggle" data-target="#bs-navbar" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" title="" class="navbar-brand">
                <img src="http://i.imgur.com/qwR1IG9.png" alt="MIX-Shop" class="img-responsive">
            </a>
        </section>
        <nav class="collapse navbar-collapse" aria-expanded="false" id="bs-navbar">
            <ul class="nav navbar-nav">
                <li><a href="" title="" class="nav-acount" data-toggle="modal" data-target="#register-box"><img src="http://i.imgur.com/JDTpXUG.png" alt="MIX-register"></a></li>
                @if(!Auth::check())
                <li><a href="" title="" class="nav-acount" data-toggle="modal" data-target="#login-box"><img src="http://i.imgur.com/XiBWZuO.png" alt="MIX-login"></a></li>
                @else
                <li class="user-avatar-container dropdown">
                    <a href="" title="" class="nav-acount dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><img src="https://s28.postimg.org/wb2qj4h0t/person1.png" alt="MIX-register">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="" title="">Trang cá nhân</a></li>
                        <li><a href="" title="">Cập nhật thông tin</a></li>
                        <li><a href="/user/logout/" title="">Đăng xuất</a></li>
                    </ul>
                </li>
                @endif
            </ul>
            <!-- Modal -->
            <div class="modal fade" id="register-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                @include('front.home.register-form')
            </div>
            <div class="modal fade" id="login-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                @include('front.home.login-form')
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