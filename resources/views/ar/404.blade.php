@extends('ar.layouts.master')
@section('pageTitle', 'الصفحة غير موجودة')
@section('wrapper')

	<!-- PAGE TITLE -->
	<header class="pagetitle pagetitle-sm">
		<div class="container">
			<div class="divtable irow">
				<div class="divcell">
					<i class="fa fa-exclamation-triangle"></i>
					<h1>الصفحة غير موجودة</h1>
					<div class="divider"></div>
					<span class="subtitle">الخطأ 404</span>
				</div>
				<div class="divcell text-right">
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}">الرئيسية</a></li>
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
					<h1>الصفحة غير موجودة</h1>
					<p>الصفحة المطلوبة غير موجودة أو لا يمكن الوصول إليها من خلال هذا الرابط.</p>
					<a href="{{ url('/') }}" class="btn btn-primary btn-wide">الرئيسية</a>
				</div>
			</section>
		</div>
		<!-- /.container -->

		<hr class="hr-nobg hidden-xs"/>

	</div>
	<!-- /.content -->

@endsection