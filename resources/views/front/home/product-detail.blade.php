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
	        		<p>- Giá : {{ $product[0]->price }} VNĐ</p>
	        		@if($feature_name)
	        			@foreach($feature_name as $fn_key => $fn_value)
	        				<p>- {{$fn_value->name}} :
	        				@php
        						$l = count($feature_value);
        						$i = 0;
        					@endphp
	        					@foreach($feature_value as $fv_key => $fv_value)
	        						@if($fn_value->id === $fv_value->feature_id)
	        							@php
	        								$i++;
	        							@endphp
	        							@if($i !== $l)
	        								{{$fv_value->vns_feature_value or $fv_value->feature_value}},
	        							@else
	        								{{$fv_value->vns_feature_value or $fv_value->feature_value}}
	        							@endif 
	        						@endif
	        					@endforeach
	        				</p>
	        			@endforeach
	        		@endif
	        	</div>
	        </div>
	        <div class="product-detail-footer">
	        	
	        </div>
	    </div>
	</div>
</div>
@endif