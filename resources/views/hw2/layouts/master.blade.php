<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/bai2.css') }}">
</head>
<body>
	<div>
		@include('hw2.layouts.header')
	</div>
	<div class="conten">	
		@yield('content')
	</div>
	<div>
		@include('hw2.layouts.footer')
	</div>
	<script src="{{ asset('js/bai2.js') }}"></script>
</body>
</html>