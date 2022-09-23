<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta name="robots" content="" />
		<meta name="description" content="" />
		<meta property="og:title" content="Mentaya Seberang - Seranau"/>
		<meta property="og:description" content="" />
		<meta property="og:image" content="" />
		<meta name="format-detection" content="telephone=no">
		
		<!-- FAVICONS ICON -->
		<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />
		
		<!-- PAGE TITLE HERE -->
		<title> Home - Kelurahan Mentaya Seberang | Seranau | Kotim</title>
		
		<!-- MOBILE SPECIFIC -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	    @include('user.layouts.partials.css')

	    <style>
body {
  background-image: url("https://png.pngtree.com/png-vector/20191110/ourmid/pngtree-right-arrow-vector-icon-white-transparent-background-png-image_1978016.jpg");
  background-repeat: repeat-y;
}
</style>

	</head>
	<body id="bg">
		<div id="loading-area"></div>
		<div class="page-wraper">
		    <!-- header -->
		    @include('user.layouts.partials.header')
		    <!-- header END -->

		    <!-- Content -->
		    @yield('content')

		    <!-- Footer -->
		    @include('user.layouts.partials.footer')
		    <!-- Footer END-->

		    <!-- scroll top button -->
		    <button class="scroltop fa fa-chevron-up scroltop-position" style="left: 10px;margin-left: 12px;"></button>
		</div>
		@include('user.layouts.partials.js')
	</body>

	@yield('js_content')

</html>