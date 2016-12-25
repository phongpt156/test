@extends('layouts.front')
@section('title')
- Tìm kiếm sản phẩm
@endsection
@section('assets')
<link rel="stylesheet" type="text/css" href="{!! asset('plugins/home/css/style.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('plugins/search/css/search.css') !!}">
<script type="text/javascript" src="{!! asset('plugins/home/js/index.js') !!}"></script>
<script type="text/javascript" src="{!! asset('plugins/search/js/index.js') !!}"></script>
@endsection
@section('content')
@include('layouts.header')
<!-- header bottom menu -->
<div class="container">
	<div class="container" style="position: absolute">
		<div class="female-category category-menu-container" style="position: relative">
			@include('front.category.female-category', ['female_categories' => $female_categories])
		</div>
	</div>
	<div class="container" style="position: absolute">
		<div class="male-category category-menu-container" style="position: relative">
			@include('front.category.male-category', ['male_categories' => $male_categories])
		</div>
	</div>
	<section class="container sub-menu" id="search-sub-menu">
	    <ul class="nav navbar-nav">
	        <li><a href="" title="">TRANG CHỦ</a></li>
	        <li><a href="" title="">SHOP</a></li>
	        <li><a href="" title="">BỘ SƯU TẬP</a></li>
	        <li>
	            <a href="" title="" class="dropdown-toggle" data-toggle="dropdown" href="" aria-expanded="false">
	                ĐỊA ĐIỂM
	                <span style="margin-left:5px"><img src="http://i.imgur.com/4QUY0ge.png" alt=""></span>
	            </a>
	            <ul class="dropdown-menu sub-menu-dropdown">
	                <li><a href="" title="">Hà Nội</a></li>
	                <li><a href="" title="">TP. HCM</a></li>
	                <li><a href="" title="">Đà Nẵng</a></li>
	            </ul>
	        </li>
	    </ul>
	</section>
</div><!-- end header bottom menu -->

<!-- search body -->
<div class="container search-body">
	<!-- product feature option-->
	<div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	    </button>
	</div>
	<div class="product-feature-container navbar-collapse collapse sidebar-navbar-collapse">
		<div class="product-feature clearfix">
			<div class="product-feature-name">
				<p>giá</p>
			</div>
			<div class="product-feature-value-container">
				<div class="product-feature-value">
					<a href="" title=""><p>250.000</p></a>
				</div>
				<div class="product-feature-value">
					<a href="" title=""><p>500.000</p></a>
				</div>
				<div class="product-feature-value">
					<a href="" title=""><p>1.000.000</p></a>
				</div>
				<div class="product-feature-value">
					<a href="" title=""><p>2.000.000</p></a>
				</div>
				<div class="product-feature-value">
					<a href="" title=""><p>5.000.000</p></a>
				</div>
			</div>
		</div>
		<div class="product-feature clearfix">
			<div class="product-feature-name">
				<p>màu</p>
			</div>
			<div class="product-feature-value-container">
				@if($color_values)
						@foreach($color_values as $key => $value)
					<div class="product-feature-value color-feature">
						<a href="javascript:void(0)" title="" style="background:{{$value->feature_default_value}}" value="{{$value->vns_feature_value or $value->feature_default_value}}"></a>
					</div>
					@endforeach
				@endif
			</div>
		</div>
		<div class="product-feature clearfix">
			<div class="product-feature-name">
				<p>size</p>
			</div>
			<div class="product-feature-value-container">
				<div class="product-feature-value">
					<a href="" title=""><p>m</p></a>
				</div>
				<div class="product-feature-value">
					<a href="" title=""><p>s</p></a>
				</div>
				<div class="product-feature-value">
					<a href="" title=""><p>l</p></a>
				</div>
				<div class="product-feature-value">
					<a href="" title=""><p>xl</p></a>
				</div>
				<div class="product-feature-value">
					<a href="" title=""><p>xxl</p></a>
				</div>
			</div>
		</div>
	</div><!-- end product feature option-->
	<!-- product show -->
	<div class="row product-show">
		<div class="col-md-6 product-card-container">
			@include('front.search.product-detail', ['product' => $product, 'feature_value' => $feature_value, 'feature_name' => $feature_name, 'product_group' => $product_group])
			<div class="">
				
			</div>
		</div>
		<div class="col-md-6 product">
			<div class="product-container">
			<ul class="product-item-container clearfix">
			@include('front.product.newestproduct', ['newest_products' => $products])
			</ul>
			</div>
		</div>
	</div>
</div><!-- end search body -->
<script type="text/javascript">
    $(document).ready(function(){
    	Register.init();
        SearchTagging.init();
        Scroll.init();
    });
</script>
@endsection