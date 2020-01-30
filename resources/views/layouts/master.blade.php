<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield("title")</title>
	
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	@yield("stylesheet")
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
	<div class="container-fluid">
		@include("layouts.nav")
		<div class="sidebar">
			@section("sidebar")
			@show
		</div>
		<div class="container">
			@yield("content")
		</div>
	</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
@yield("javascript")

</html>