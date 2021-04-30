<!DOCTYPE HTML>
<html>
	<head>
	    @include('includes.main_page.head')
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        @include('includes.main_page.navbar')
        @yield('content')
        @include('includes.main_page.footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	@include('includes.main_page.js')
	</body>
</html>

