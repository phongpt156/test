<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MIX VN</title>
	<link rel="stylesheet" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}">
	<script type="text/javascript" src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
	<style>
		
	</style>
</head>
<body>
	@if(isset($products))
		{{$products}}
	@else
		123
	@endif
	<input type="button" name="">
  	<script type="text/javascript">
  		$("input[type='button']").on("click", function(){
  			alert(123);
  			$.ajax({
  				url: "http://localhost:8000/test1",
  				type: "get",
  				dataType: "html",
  				success: function(data) {
  					alert(123);
  					$("body").html(data);
  				}
  			});
  		});
  	</script>
</body>
</html>