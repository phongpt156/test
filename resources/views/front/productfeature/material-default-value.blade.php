@if($values)
<ul class="dropdown-menu header-menu search-tagging">
	@foreach($values as $key => $value)
    <li><a href="javascript:void(0)" title="">{{$value->feature_default_value}}</a></li>
    @endforeach
</ul>
@endif