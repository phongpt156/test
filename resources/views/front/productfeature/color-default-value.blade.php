@if($values)
<ul class="dropdown-menu header-menu search-tagging">
	@foreach($values as $key => $value)
    <li class="color-list-item" value="{{$value->vns_feature_value or $value->feature_default_value}}"><a class="product_feature" href="javascript:void(0)" title="" style="background:{{$value->feature_default_value}}" value="{{$value->vns_feature_value or $value->feature_default_value}}"></a></li>
    @endforeach
</ul>
@endif