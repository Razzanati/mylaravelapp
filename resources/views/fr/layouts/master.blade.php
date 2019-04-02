<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('pageTitle') - Fiviar</title>
	<link href="{{ asset('fiviarico.ico') }}" rel="shortcut icon" type="image/x-icon">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,cyrillic" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="{{ asset('css/preloader.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/revolution.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<!-- DATATABLE -->
    <link rel="stylesheet" href="{{ asset('datatable/jquery.dataTables.min.css') }}">
	<!-- /.footer -->
</head>
<body>

<!-- Preloader -->
<div class="preloader"></div>

<!-- HEADER -->
@include('fr.layouts.header')
<!-- /.header -->

<!-- WRAPPER -->
@yield('wrapper')
<!-- /.wrapper -->

<!-- FOOTER -->
@include('fr.layouts.footer')
<!-- /.footer -->

@yield('map')

<!-- SCRIPTS -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB7rM3PcIHfjbtDLOjGRZBkyQFwHeuJOZI"></script>
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- DATATABLE -->
<script src="{{ asset('datatable/jquery-1.12.4.js') }}"></script>
<script src="{{ asset('datatable/jquery.dataTables.min.js') }}"></script>
<!-- ./datatables -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/fontawesome-markers.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<!-- DATATABLE -->
<script type="text/javascript">
$(document).ready(function() {
	$('#example').DataTable( {
	"scrollX": true,
	"order": [[ 1, 'desc' ]]
	} );
} );
</script>
<!-- ./datatables -->
</body>
</html>