<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>JDIH Ketapang</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ url('public/landing') }}/assets/images//logo-jdihn.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('public/landing') }}/assets/images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('public/landing') }}/assets/images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="{{ url('public/landing') }}/assets/images//apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="{{ url('public/landing') }}/assets/revolution/css/settings.css">
	
	<link rel="stylesheet" type="text/css" href="{{ url('public/landing') }}/assets/revolution/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/landing') }}/assets/revolution/fonts/font-awesome/css/font-awesome.min.css">
	
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="{{ url('public/landing') }}/assets/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="{{ url('public/landing') }}/assets/revolution/css/navigation.css">
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link href="{{ url('public/landing') }}/assets/css/lib.css" rel="stylesheet">
	
	<!-- Custom - Common CSS -->
	<link href="{{ url('public/landing') }}/assets/css/plugins.css" rel="stylesheet">
	<link href="{{ url('public/landing') }}/assets/css/elements.css" rel="stylesheet">
	
	<!-- Custom - Theme CSS -->
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('public/landing') }}/assets/css/plugins.css">			
	<link rel="stylesheet" type="text/css" href="{{ url('public/landing') }}/assets/css/elements.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	 <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<x-layouts.web.header />
	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->
	
		
		<main>
			<!-- Slider Section 1 -->
		{{ $slot }}
		</main>
	<x-layouts.web.footer />
		<!-- Footer Main -->
	</div>
	{{-- <x-layouts.web.footer /> --}}
	
	<!-- JQuery v1.11.3 -->
	<script src="{{ url('public/landing') }}/assets/js/jquery.min.js"></script>

	<!-- Library - Js -->
	<script src="{{ url('public/landing') }}/assets/js/lib.js"></script>
	
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="{{ url('public/landing') }}/assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="{{ url('public/landing') }}/assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="{{ url('public/landing') }}/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="{{ url('public/landing') }}/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="{{ url('public/landing') }}/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="{{ url('public/landing') }}/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="{{ url('public/landing') }}/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>	
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
	
	<!-- Library - Theme JS -->
	<script src="{{ url('public/landing') }}/assets/js/functions.js"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

     <script>
        let table = new DataTable('#datatable');
        $('.btn-nav-navigations').on('click', function() {
            $('body').toggleClass('sidebar-close')
        })
    </script>

   
</body>
</html>
