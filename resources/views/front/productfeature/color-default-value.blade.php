@if($values)
<ul class="dropdown-menu header-menu search-tagging">
	@foreach($values as $key => $value)
    <li class="color-list-item"><a href="javascript:void(0)" title="" style="background:{{$value->feature_default_value}}"></a></li>
    @endforeach
</ul>
@endif