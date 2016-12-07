@if($product)
<div class="modal fade" id="product-detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog product-modal" role="document">
	    <div class="product-detail-container">
	        <div class="product-detail-body clearfix">
	        	<div class="product-detail-image-container">
	        		<a href="" title="">
	        			<img src="{!! $product[0]->p_i_name !!}" alt="">
	        		</a>
	        	</div>
	        	<div class="product-detail-info-container">
	        		<a href="" title=""><h1>{!! $product[0]->p_name !!}</h1></a>
	        		<div class="hr-bottom clearfix">
	        			<h2>Thông tin</h2>
	        		</div>
	        		<p>- Giá : <a href="" title="">{{ $product[0]->price }} VNĐ</a></p>
	        		@if($feature_name)
	        			@php
        					$feature = [];
        				@endphp
	        			@foreach($feature_name as $fn_key => $fn_value)
	        				@php
	        					$feature[$fn_value->name] = [];
	        				@endphp
	        				@if($feature_value)
	        					@foreach($feature_value as $fv_key => $fv_value)
	        						@if($fv_value->feature_id === $fn_value->id)
	        							@php
	        								$value = isset($fv_value->vns_feature_value) ? $fv_value->vns_feature_value : $fv_value->feature_value;
	        								array_push($feature[$fn_value->name], $value)
	        							@endphp
	        						@endif
	        					@endforeach
	        				@endif
	        			@endforeach
	        		@endif
	        		@foreach($feature as $key => $value)
	        			<p>
	        				- {{ $key }} : 
	        				@php
	        					$l = count($feature[$key]);
	        					$i = 0;
	        				@endphp
	        				@foreach($value as $k => $v)
	        					@php
	        						$i++;
	        					@endphp
	        					@if($i === $l)
	        						<a href="" title="">{{ $v }}</a>
	        					@else
	        						<a href="" title="">{{ $v }}</a>, 
	        					@endif
	        				@endforeach
	        			</p>
	        		@endforeach
	        		<p class="product-detail-address">- Địa chỉ : <a href="" title="">{{$product[0]->s_address}}</a></p>
	        		<a href="" title="" class="product-sum-like"><span><img src="http://i.imgur.com/seWtRZc.png" alt=""> {{ $product[0]->like }}</span></a>
	        	</div>
	        </div>
	        <div class="product-detail-footer">
	        	
	        </div>
	    </div>
	</div>
</div>
@endif