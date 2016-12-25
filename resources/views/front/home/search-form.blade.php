{!! Form::open(['route' => 'search-product', 'method' => 'get', 'class' => 'clearfix']) !!}

<label class="input-form-container col-xs-11" for="text">
	<div class="search-tag-container">
			
	</div>	
	{!! 
		Form::text(
			'product[name]',
			'',
			[
				'placeholder' => 'Tìm kiếm sản phẩm',
				'class' => 'write-text-search search-form-component',
				'id' => 'text'
			]
		) 
	!!}
</label>
{!! 
	Form::submit(
		'',
		[
			'class' => 'btn col-sm-1 col-xs-1 submit-search-form search-form-component'
		]
	)
!!}

{!! Form::close() !!}