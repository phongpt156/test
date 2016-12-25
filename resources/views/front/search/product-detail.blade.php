@if(isset($product))
	<div class="product-card clearfix">
		<div class="product-detail-image-container">
    		<a href="" title="">
    			<img src="{!! $product[0]->p_i_name !!}" alt="">
    		</a>
    	</div>
    	<div class="product-detail-info-container">
    		<a href="" title=""><h1>{!! $product[0]->p_name !!}</h1></a>
	        <ul class="nav nav-tabs" role="tablist">
    			<li role="presentation" class="active col-xs-6"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông tin</a></li>
    			<li role="presentation" class="col-xs-6"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Mô tả</a></li>
  			</ul>

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
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
	        		<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					@include('front.search.product-group', ['product_group' => $product_group])
				</div>
			</div>
	    </div>
	    <div class="product-detail-footer">
	        	
	    </div>
	</div>
@endif