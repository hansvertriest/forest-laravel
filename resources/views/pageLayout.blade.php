<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('document-title')</title>
	@yield('scripts')
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
	@yield('header')
	<div class="page-wrapper">
		<div class="page">
			@if (trim($__env->yieldContent('title')))
				<h1 class="page-title">@yield('title')</h1>
			@endif
			<div class="content-container">
				@yield('content')
			</div>
		</div>
	<div>
</body>
</html>