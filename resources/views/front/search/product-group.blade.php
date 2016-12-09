@if($product_group)
<div class="product-group-container">
	@foreach($product_group as $key => $value)
		<div class="product-group-item">
			<div class="product-group-image">
				<a href="" title="">
					<img src="{{ $value->p_g_i_name }}" alt="">
				</a>
			</div>
			<div class="product-group-info">
				<a href="" title="">
					{{ $value->p_g_name }}
					@if($value->s_name)
						({{$value->s_name}})
					@endif
				</a>
			</div>
		</div>
	@endforeach
</div>
@endif