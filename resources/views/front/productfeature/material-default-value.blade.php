@if($values)
<ul class="dropdown-menu header-menu search-tagging">
	@foreach($values as $key => $value)
    <li class="product_feature" value="{{$value->vns_feature_value or $value->feature_default_value}}"><a class="product_feature" href="javascript:void(0)" title="" value="{{$value->vns_feature_value or $value->feature_default_value}}">{{$value->feature_default_value}}</a></li>
    @endforeach
</ul>
@endif