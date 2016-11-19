<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MIX VN</title>
	<link rel="stylesheet" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}">
	<script type="text/javascript" src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('plugins/jquery/select2.min.js') !!}"></script>
	<style>
		
	</style>
</head>
<body>
	<select class="js-example-basic-single">
  		<option value="AL">Alabama</option>
    	...
  		<option value="WY">Wyoming</option>
	</select>
  	<script type="text/javascript">
  		$(document).ready(function(){
  			$(".js-example-basic-single").select2();
  		})
  	</script>
</body>
</html>