<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MIX VN</title>
	<link rel="stylesheet" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}">
	<script type="text/javascript" src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
	@yield('assets')
</head>
<body>
	<div class="container-fluid">
    	@yield('content')
	</div>
</body>
</html>