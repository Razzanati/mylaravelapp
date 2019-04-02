@extends('fr.layouts.master')
@section('pageTitle', 'Page Non Trouvée')
@section('wrapper')

	<!-- PAGE TITLE -->
	<header class="pagetitle pagetitle-sm">
		<div class="container">
			<div class="divtable irow">
				<div class="divcell">
					<i class="fa fa-exclamation-triangle"></i>
					<h1>Page Non Trouvée</h1>
					<div class="divider"></div>
					<span class="subtitle">Erreur 404</span>
				</div>
				<div class="divcell text-right">
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}">Accueil</a></li>
						<!-- <li class="active">Pages</li> -->
					</ol>
				</div>
			</div>
		</div>
	</header>
	<!-- /.pagetitle -->

	<!-- CONTENT -->
	<div class="content">

		<hr class="hr-nobg hr-sm hidden-xs"/>

		<!-- CONTAINER -->
		<div class="container">
			<section class="row page-header text-center">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="icon icon-color icon-size-7">
						<i class="fa fa-search"></i>
					</div>
					<h1>Page Non Trouvée</h1>
					<p>la page que vous avez demandée n'existe pas, ou elle n'est plus accessible à cette adresse.</p>
					<a href="{{ url('/') }}" class="btn btn-primary btn-wide">Accueil</a>
				</div>
			</section>
		</div>
		<!-- /.container -->

		<hr class="hr-nobg hidden-xs"/>

	</div>
	<!-- /.content -->

@endsection