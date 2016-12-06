@if($collections)
	@foreach($collections as $key => $value)
	<li class="collection-item">
	    <a href="" title="">
	        <img src="{{ $value->c_i_name }}" alt="{{$value->alt}}" class="img-responsive">
	    </a>
	</li>
	@endforeach
@endif
<div id="collection-total-page" total-page="{{ $collections->lastPage()}}" current-page="{{ $collections->currentPage() }}"></div>
