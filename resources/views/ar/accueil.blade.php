@extends('ar.layouts.master')
@section('pageTitle', 'الرئيسية')
@section('wrapper')

<!-- RAA -->
<style type="text/css">
.raa
{
	text-shadow: 2px 2px 1px #000000;
}
</style>
<!-- RAA -->

<!-- WRAPPER -->
<div class="wrapper">

	<div class="bannercontainer">
		<div class="banner" data-fullscreen="on" data-auto="true" data-hidetimerbar="off" data-fullscreenoffsetcontainer=".header">
			<ul>
				<li data-transition="fade" data-slotamount="7" data-saveperformance="on" class="background" style="background-image: url(images/slider/slide_1.png);">
					<div class="tp-caption sft large_bold_white"  data-x="center" data-y="center" data-voffset="-85" data-speed="700" data-start="700" data-easing="easeOutBack"></div>
					<p class="tp-caption fade text-center raa" data-x="center" data-y="center" data-speed="500" data-start="900" data-easing="easeOutBack">تنظيم ورشة تدريبية بالتعاون مع منظمة الأغذية والزراعة لوضع رؤية <br/> مشتركة لتعزيز الأداء، المساواة، الحكامة وإدارة المنظمات المهنية.</p>
					<a href="{{ url('presentation') }}" class="tp-caption sfb btn btn-primary btn-lg btn-wide slider-scroll" data-x="center" data-y="center" data-voffset="80" data-hoffset="-10" data-speed="300" data-start="1000">تقديم</a>
				</li>
				<li data-transition="fade" data-slotamount="7" data-saveperformance="on" class="background" style="background-image: url(images/slider/slide_2.jpg);">
					<div class="tp-caption sft large_bold_white"  data-x="center" data-y="center" data-voffset="-85" data-speed="700" data-start="700" data-easing="easeOutBack"></div>
					<p class="tp-caption fade text-center raa" data-x="center" data-y="center" data-speed="500" data-start="900" data-easing="easeOutBack">بموجب القانون رقم 03-12، ثمَّ الإعتراف بالفدرالية البيمهنية للحوم الحمراء <br/> أنها فدرالية بيمهنية فلاحية متخصصة في قطاع اللحوم الحمراء.</p>
					<a href="{{ url('presentation') }}" class="tp-caption sfb btn btn-primary btn-lg btn-wide slider-scroll" data-x="center" data-y="center" data-voffset="80" data-hoffset="-10" data-speed="300" data-start="1000">كلمة الرئيس</a>
				</li>
				<li data-transition="fade" data-slotamount="7" data-saveperformance="on" class="background" style="background-image: url(images/slider/slide_3.jpg);">
					<div class="tp-caption sft large_bold_white"  data-x="center" data-y="center" data-voffset="-85" data-speed="700" data-start="700" data-easing="easeOutBack"></div>
					<p class="tp-caption fade text-center raa" data-x="center" data-y="center" data-speed="500" data-start="900" data-easing="easeOutBack">بمحتوى أصلي، أطلقت الفدرالية حملة تحسيسية جديدة "زعم تاكل اللحم"<br/> لرفع مستوى الوعي لذى المستهلكين المغاربة باللحوم الحمراء.</p>
					<a href="https://www.facebook.com/%D8%B2%D8%B9%D9%85-%D8%AA%D8%A7%D9%83%D9%84-%D8%A7%D9%84%D9%84%D8%AD%D9%85-838545946303827/" class="tp-caption sfb btn btn-primary btn-lg btn-wide slider-scroll" data-x="center" data-y="center" data-voffset="80" data-hoffset="-10" data-speed="300" data-start="1000">شاهد</a>
				</li>
				<li data-transition="fade" data-slotamount="7" data-saveperformance="on" class="background" style="background-image: url(images/slider/slide_4.jpg);">
					<div class="tp-caption sft large_bold_white"  data-x="center" data-y="center" data-voffset="-85" data-speed="700" data-start="700" data-easing="easeOutBack"></div>
					<p class="tp-caption fade text-center raa" data-x="center" data-y="center" data-speed="500" data-start="900" data-easing="easeOutBack">في 18 مايو 2015 ، تم إعطاء الإنطلاقة للمركز التقني لتنمية قطاعات الثروة الحيوانية <br/> التي يديرها مهنيون كل من قطاعات الألبان، الدواجن واللحوم الحمراء.</p>
					<a href="{{ url('zoopole-presentation') }}" class="tp-caption sfb btn btn-primary btn-lg btn-wide slider-scroll" data-x="center" data-y="center" data-voffset="80" data-hoffset="-10" data-speed="300" data-start="1000">اقرأ المزيد</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- CONTENT -->
	<div class="content no-all-paddings">

		<!-- CONTAINER -->
		<div class="highlight highlight-dark inverse" id="slide-under">
			<div class="container">
				<div class="row irow-xs cols-border">
					<div class="col-sm-6 col-md-push-6">
						<div class="media">
							<div class="media-left">
								<div class="icon icon-color icon-size-4">
									<i class="fa fa-bullhorn"></i>
								</div>
							</div>
							<div class="media-body">
								<h4>مرحبا بكم في موقع الفدرالية</h4>
								<p>وسيلة تواصل للفدرالية مع مختلف الشركاء وعامة الجمهور.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-pull-6">
						<div class="media">
							<div class="media-left">
								<div class="icon icon-color icon-size-4">
									<i class="fa fa-book"></i>
								</div>
							</div>
							<div class="media-body">
								<h4>قطاع اللحوم الحمراء</h4>
								<p>وضعت في قلب استراتيجية مخطط المغرب الأخضر، بهدف تحسين إمدادات اللحوم ، الكمية والنوعية لصالح المستهلكين.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="corner-tip-down"></div>
		</div>
		<!-- /.container -->

		<hr class="hr-nobg"/>

		<!-- CONTAINER -->
		<div class="container">
			<div class="row irow-sm text-center cards steps-4 steps-noborder">
					<a class="col-md-3 col-sm-6 card card-light">
						<div class="icon icon-color icon-size-4">
							<i class="fa fa-certificate"></i>
						</div>
						<h4>الجودة</h4>
						<p>تنفيذ إجراءات مشتركة لتعزيز الجودة.</p>
						<span class="heading-divider"></span>
					</a>
					<a class="col-md-3 col-sm-6 card card-light card-lighter hover">
						<div class="icon icon-color icon-size-4">
							<i class="fa fa-check-square-o"></i>
						</div>
						<h4>إلتزام</h4>
						<p>تشجيع الاستثمار وخلق فرص عمل جديدة.</p>
						<span class="heading-divider"></span>
					</a>
					<a class="col-md-3 col-sm-6 card card-light card-darker">
						<div class="icon icon-color icon-size-4">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<h4>التثمين</h4>
						<p>تشجيع تقييم اللحوم لتحسين القيمة المضافة.</p>
						<span class="heading-divider"></span>
					</a>
					<a class="col-md-3 col-sm-6 card card-light card-lighter">
						<div class="icon icon-color icon-size-4">
							<i class="fa fa-refresh"></i>
						</div>
						<h4>التبادل</h4>
						<p>إنشاء إطار للتبادل والتنسيق بين مهن القطاع.</p>
						<span class="heading-divider"></span>
					</a>
			</div>
		</div>
		<!-- /.container -->

		<hr class="hr-nobg"/>

		<!-- CONTAINER -->
		<div class="container">
			<div class="row irow-xs cards">
				<div class="col-md-8 col-sm-6" dir="ltr">
					<div class="container singlework">
						<div class="slider oneslider magnific-wrap">
							<ul>
								<li>
									<a class="magnific" href="{{ asset('images/figure/1P.jpg') }}">
										<img src="{{ asset('images/figure/1P.jpg') }}" alt="">
									</a>
								</li>
								<li>
									<a class="magnific" href="{{ asset('images/figure/2P.jpg') }}">
										<img src="{{ asset('images/figure/2P.jpg') }}" alt="">
									</a>
								</li>
								<li>
									<a class="magnific" href="{{ asset('images/figure/3P.jpg') }}">
										<img src="{{ asset('images/figure/3P.jpg') }}" alt="">
									</a>
								</li>
								<li>
									<a class="magnific" href="{{ asset('images/figure/4P.jpg') }}">
										<img src="{{ asset('images/figure/4P.jpg') }}" alt="">
									</a>
								</li>
								<li>
									<a class="magnific" href="{{ asset('images/figure/5P.jpg') }}">
										<img src="{{ asset('images/figure/5P.jpg') }}" alt="">
									</a>
								</li>
								<li>
									<a class="magnific" href="{{ asset('images/figure/6P.jpg') }}">
										<img src="{{ asset('images/figure/6P.jpg') }}" alt="">
									</a>
								</li>
							</ul>
							<a href="" class="slider-arrow arrow-lg slider-arrow-prev"></a>
							<a href="" class="slider-arrow arrow-lg slider-arrow-next"></a>
							<nav class="slider-pagination"></nav>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<h2><a>تقديم</a></h2>
					<div class="heading-divider"></div>
					<p style="text-align:justify">تأسست في 18 أبريل 2008، الفيديرالية البيمهنية للحوم الحمراء هي منظمة مهنية مهيكلة تضم تضم مختلف حلقات قطاع اللحوم الحمراء من الإنتاج إلى التثمين.</p>
					<p>الفدرالية البيمهنية للحوم الحمراء هي عضو في الاتحاد المغربي للزراعة والتنمية القروية (COMADER).</p>
					<p style="text-align:justify">تتكون الفدرالية البيمهنية للحوم الحمراء من منظمات مهنية، مشكلة قانونيا و تمثل مختلف أنشطة القطاع.
					</p>
				</div>
			</div>
		</div>
		<!-- /.container -->

		<hr class="hr-nobg hr-md"/>

		<!-- CONTAINER -->
		<div class="highlight highlight-light">
			<div class="container">
				<div class="row irow-xs">
					<div class="col-sm-4 col-sm-push-8">
						<div class="media">
							<div class="media-left">
								<div class="icon icon-color icon-size-3" data-hover="pulse">
									<i class="fa fa-font"></i>
								</div>
							</div>
							<div class="media-body">
								<h4>القرب</h4>
								<p>تحسين أداء السوق وشفافيته من خلال معرفة آليات العرض والطلب.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-left">
								<div class="icon icon-color icon-size-3" data-hover="rubberBand">
									<i class="fa fa-paper-plane"></i>
								</div>
							</div>
							<div class="media-body">
								<h4>التفرغ</h4>
								<p>تعزيز مساهمة قطاع اللحوم الحمراء في ضمان إمدادات بلدنا من البروتينات ذات الأصل الحيواني.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-sm-pull-8">
						<div class="media">
							<div class="media-left">
								<div class="icon icon-color icon-size-3" data-hover="rubberBand">
									<i class="fa fa-cubes"></i>
								</div>
							</div>
							<div class="media-body">
								<h4>تعدد الإختصاص</h4>
								<p>المساهمة في تحقيق الدراسات و الخبرات اللازمة ، بما في ذلك تحسين قنوات التسويق.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->

		<!-- CONTAINER -->
		<div class="highlight highlight-dark inverse overlay background" style="background-image: url(images/slider/V2.jpg);">
			<div class="container">
				<section class="row irow-xs page-header cols-border divtable">
					<div class="col-lg-9 col-md-8 col-sm-7 divcell">
						<h1>الفدرالية البيمهنية للحوم الحمراء، 10 سنوات من الوجود</h1>
						<p>إلتزام من جميع مهنيي قطاع اللحوم الحمراء.</p>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-5 text-right divcell" style="border-left-color: #000000 !important;">
						<nav>
							<div class="icon icon-size-7 icon-color">
								<i class="fa fa-newspaper-o"></i>
							</div>
						</nav>
					</div>
				</section>
			</div>
		</div>
		<!-- /.container -->

		<hr class="hr-nobg"/>

		<!-- CONTAINER WRAP -->
		<div class="container-wrap">
			<div class="page-header text-center">
				<h2>التكوين</h2>
				<div class="heading-divider"></div>
			</div>
			<!-- CONTAINER -->
			<div class="container">
				<div class="row isotope-wrap portfolio-wrap magnific-wrap margin-wrap">
					<div class="col-sm-4 col-xs-6">
						<figure class="figure">
							<img src="{{ asset('images\figure\1P.jpg')}}" alt="">
							<div class="mask mask-dark">
								<nav>
									<a class="icon icon-inverse icon-size-2 icon-theme icon-rounded magnific" href="{{ asset('images\figure\1P.jpg')}}">
										<i class="fa fa-search"></i>
									</a>
								</nav>
							</div>
						</figure>
					</div>
					<div class="col-sm-4 col-xs-6">
						<figure class="figure">
							<img src="{{ asset('images\figure\2P.jpg')}}" alt="">
							<div class="mask mask-dark">
								<nav>
									<a class="icon icon-inverse icon-size-2 icon-theme icon-rounded magnific" href="{{ asset('images\figure\2P.jpg')}}">
										<i class="fa fa-search"></i>
									</a>
								</nav>
							</div>
						</figure>
					</div>
					<div class="col-sm-4 col-xs-6">
						<figure class="figure">
							<img src="{{ asset('images\figure\3P.jpg')}}" alt="">
							<div class="mask mask-dark">
								<nav>
									<a class="icon icon-inverse icon-size-2 icon-theme icon-rounded magnific" href="{{ asset('images\figure\3P.jpg')}}">
										<i class="fa fa-search"></i>
									</a>
								</nav>
							</div>
						</figure>
					</div>
					<div class="col-sm-4 col-xs-6">
						<figure class="figure">
							<img src="{{ asset('images\figure\4P.jpg')}}" alt="">
							<div class="mask mask-dark">
								<nav>
									<a class="icon icon-inverse icon-size-2 icon-theme icon-rounded magnific" href="{{ asset('images\figure\4P.jpg')}}">
										<i class="fa fa-search"></i>
									</a>
								</nav>
							</div>
						</figure>
					</div>
					<div class="col-sm-4 col-xs-6">
						<figure class="figure">
							<img src="{{ asset('images\figure\5P.jpg')}}" alt="">
							<div class="mask mask-dark">
								<nav>
									<a class="icon icon-inverse icon-size-2 icon-theme icon-rounded magnific" href="{{ asset('images\figure\5P.jpg')}}">
										<i class="fa fa-search"></i>
									</a>
								</nav>
							</div>
						</figure>
					</div>
					<div class="col-sm-4 col-xs-6">
						<figure class="figure">
							<img src="{{ asset('images\figure\6P.jpg')}}" alt="">
							<div class="mask mask-dark">
								<nav>
									<a class="icon icon-inverse icon-size-2 icon-theme icon-rounded magnific" href="{{ asset('images\figure\6P.jpg')}}">
										<i class="fa fa-search"></i>
									</a>
								</nav>
							</div>
						</figure>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container-wrap -->

		<hr class="hr-nobg"/>

		<!-- CONTAINER -->
		<div class="contact contact-light map-wrap">
			<!-- MAP -->
			<div class="google-map google-map-sm">
				<div class="google-map-container" data-markers="33.9611868,-6.8836871,21z" data-center="33.9611868,-6.8836871,21z" data-zoom="11"></div>
				<a href="#map-modal" class="a-map" data-toggle="modal">
					<i class="fa fa-arrows-alt"></i>
				</a>
			</div>
			<!-- /.google-map -->

			<div class="container">
				<div class="row irow-sm text-center cols-border contact-wrap">
					<div class="col-md-3 col-xs-6">
						<div class="icon icon-size-4 icon-color">
							<i class="fa fa-clock-o"></i>
						</div>
						<h4>إتصل بنا</h4>
						<address>يعمل فريقنا عادة من الساعة 9 صباحا إلى 5 مساءًا</address>
						<div class="heading-divider"></div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="icon icon-size-4 icon-color">
							<i class="fa fa-map-marker"></i>
						</div>
						<h4>العنوان</h4>
						<address>شارع الطرفاء، قطاع 19، فيلا حور، حي الرياض، الرباط</address>
						<div class="heading-divider"></div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="icon icon-size-4 icon-color">
							<i class="fa fa-phone"></i>
						</div>
						<h4>الهاتف / الفاكس</h4>
						<address>
							+212 (0)537 80 32 46 <br/>
						</address>
						<div class="heading-divider"></div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="icon icon-size-4 icon-color">
							<i class="fa fa-envelope-o"></i>
						</div>
						<h4>البريد الإلكتروني</h4>
						<address>
							<a href="mailto:fiviar@fiviar.ma">fiviar@fiviar.ma</a> <br/>
						</address>
						<div class="heading-divider"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->

	</div>
	<!-- /.content -->

</div>
<!-- /.wrapper -->


<!-- Modal -->
<div class="modal map-modal" id="map-modal">
	<a href="#" class="map-close" data-dismiss="modal"><i class="fa fa-close"></i></a>
	<div class="google-map-popup"></div>
</div>
<!-- /.modal -->
@endsection
