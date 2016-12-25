@if($newest_products)
	@foreach($newest_products as $key => $value)
	<li class="product-item col-lg-3 col-md-4 col-sm-6 col-xs-6">
		<div class="product-user-action">
			<a href="{{ url('view/product/' . $value->id)}}" title="" class="product-image-container">
				<img src="{{ $value->p_i_name }}" alt="{{$value->alt}}">
			</a>
			<ul class="row select-action">
			@if(isset($list_product_liker))
				@if(in_array($value->id, $list_product_liker))
				<li class="col-xs-4 likedBtn" product="{{$value->id}}" user-action="like">
				@else
				<li class="col-xs-4" product="{{$value->id}}" user-action="like">
				@endif
			@else
				<li class="col-xs-4" product="{{$value->id}}" user-action="like">
			@endif 

					<a href="javascript:void(0)" title="">
						<img src="http://i.imgur.com/LjwCZFM.png" alt="">
					</a>
				</li>
				<li class="col-xs-4" product="{{$value->id}}" user-action="buy">
					<a href="javascript:void(0)" title="">
						<img src="http://i.imgur.com/O7whI4a.png" alt="">
					</a>
				</li>
				<li class="col-xs-4" product="{{$value->id}}" user-action="follow">
					<a href="javascript:void(0)" title="">
						<img src="http://i.imgur.com/MgPip0a.png" alt="">
					</a>
				</li>
			</ul>
		</div>
		<div class="product-info-container">
			<a href="" title="" class="product-name text-center"><p>{{ $value->p_name }}</p></a>
			<div class="product-info clearfix">
				<a href="" title="{{ $value->s_name }}" class="supplier-name" data-toggle="tooltip"><p>{{ $value->s_name }}</p></a>
				<a href="" title="" class="product-price"><p>{{ $value->price }} đ</p></a>
			</div>
			<a href="" title="" class="product-sum-like"><span><img src="http://i.imgur.com/seWtRZc.png" alt=""> {{ $value->like }}</span></a>
		</div>
	</li>
	@endforeach
@endif
<div class="newest-product-total-page" total-page="{{ $newest_products->lastPage()}}" current-page="{{ $newest_products->currentPage() }}"></div>