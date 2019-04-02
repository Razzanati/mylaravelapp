@extends('fr.layouts.master')
@section('pageTitle', 'Accueil')
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
					<p class="tp-caption fade text-center raa" data-x="center" data-y="center" data-speed="500" data-start="900" data-easing="easeOutBack">Organisation d'un atelier de formation en collaboration avec la FAO <br/> dans le but d'ellaborer une vision commune pour renforcer la performance, <br/> l'équité, la gouvernance et la gestion des organisations professionnelles.</p>
					<a href="{{ url('presentation') }}" class="tp-caption sfb btn btn-primary btn-lg btn-wide slider-scroll" data-x="center" data-y="center" data-voffset="80" data-hoffset="-10" data-speed="300" data-start="1000">Présentation</a>
				</li>
 				<li data-transition="fade" data-slotamount="7" data-saveperformance="on" class="background" style="background-image: url(images/slider/slide_2.jpg);">
					<div class="tp-caption sft large_bold_white"  data-x="center" data-y="center" data-voffset="-85" data-speed="700" data-start="700" data-easing="easeOutBack"></div>
					<p class="tp-caption fade text-center raa" data-x="center" data-y="center" data-speed="500" data-start="900" data-easing="easeOutBack">Par la loi n° 03-12, La fédération Interprofessionnelle <br/> des Viandes Rouges (FIVIAR) est reconnue en tant <br/> qu'interprofession agricole de la filière viandes rouges.</p>
					<a href="{{ url('presentation') }}" class="tp-caption sfb btn btn-primary btn-lg btn-wide slider-scroll" data-x="center" data-y="center" data-voffset="80" data-hoffset="-10" data-speed="300" data-start="1000">Mot du président</a>
				</li>
				<li data-transition="fade" data-slotamount="7" data-saveperformance="on" class="background" style="background-image: url(images/slider/slide_3.jpg);">
					<div class="tp-caption sft large_bold_white"  data-x="center" data-y="center" data-voffset="-85" data-speed="700" data-start="700" data-easing="easeOutBack"></div>
					<p class="tp-caption fade text-center raa" data-x="center" data-y="center" data-speed="500" data-start="900" data-easing="easeOutBack">Avec un contenu original, la FIVIAR a lancé une nouvelle campagne زعم تاكل اللحم <br/> de sensibilisation pour les marocains consommateurs des viandes rouges.</p>
					<a href="https://www.facebook.com/%D8%B2%D8%B9%D9%85-%D8%AA%D8%A7%D9%83%D9%84-%D8%A7%D9%84%D9%84%D8%AD%D9%85-838545946303827/" class="tp-caption sfb btn btn-primary btn-lg btn-wide slider-scroll" data-x="center" data-y="center" data-voffset="80" data-hoffset="-10" data-speed="300" data-start="1000">Voir</a>
				</li>
				<li data-transition="fade" data-slotamount="7" data-saveperformance="on" class="background" style="background-image: url(images/slider/slide_4.jpg);">
					<div class="tp-caption sft large_bold_white"  data-x="center" data-y="center" data-voffset="-85" data-speed="700" data-start="700" data-easing="easeOutBack"></div>
					<p class="tp-caption fade text-center raa" data-x="center" data-y="center" data-speed="500" data-start="900" data-easing="easeOutBack">Le 18 mai 2015, le cout d’envoi du centre interprofessionnel a été <br/> donné au centre technique pour le développement des filières animales géré <br/> par les professionnels de trois filières (laitière, avicole et viandes rouges).</p>
					<a href="{{ url('zoopole-presentation') }}" class="tp-caption sfb btn btn-primary btn-lg btn-wide slider-scroll" data-x="center" data-y="center" data-voffset="80" data-hoffset="-10" data-speed="300" data-start="1000">En savoir plus</a>
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
					<div class="col-sm-6">
						<div class="media">
							<div class="media-left">
								<div class="icon icon-color icon-size-4">
									<i class="fa fa-bullhorn"></i>
								</div>
							</div>
							<div class="media-body">
								<h4>Bienvenue au site de la FIVIAR</h4>
								<p>Outil de communication de la FIVIAR vis-a-vis de ses partenaires et du grand public.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="media">
							<div class="media-left">
								<div class="icon icon-color icon-size-4">
									<i class="fa fa-book"></i>
								</div>
							</div>
							<div class="media-body">
								<h4>Filière Viandes Rouges</h4>
								<p>Placée au coeur de la stratégie du plan Maroc Vert, visant l'amélioration de l'offre en viande, en quantité et qualité au profit des consommateurs.</p>
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
						<h4>Qualité</h4>
						<p>Mettre en œuvre les actions communes pour la promotion de la qualité.</p>
						<span class="heading-divider"></span>
					</a>
					<a class="col-md-3 col-sm-6 card card-light card-lighter hover">
						<div class="icon icon-color icon-size-4">
							<i class="fa fa-check-square-o"></i>
						</div>
						<h4>Engagement </h4>
						<p>La promotion de l’investissement et la création de nouveaux emplois.</p>
						<span class="heading-divider"></span>
					</a>
					<a class="col-md-3 col-sm-6 card card-light card-darker">
						<div class="icon icon-color icon-size-4">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<h4>Valorisation</h4>
						<p>L’encouragement de la valorisation des viandes pour une meilleure valeur ajoutée.</p>
						<span class="heading-divider"></span>
					</a>
					<a class="col-md-3 col-sm-6 card card-light card-lighter">
						<div class="icon icon-color icon-size-4">
							<i class="fa fa-refresh"></i>
						</div>
						<h4>Echange</h4>
						<p>Créer un cadre d’échange et de coordination entre les  professions de la filière.</p>
						<span class="heading-divider"></span>
					</a>
			</div>
		</div>
		<!-- /.container -->

		<hr class="hr-nobg"/>

		<!-- CONTAINER -->
		<div class="container">
			<div class="row irow-xs cards">
				<div class="col-md-8 col-sm-6">
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
					<h2><a>Présentation</a></h2>
					<div class="heading-divider"></div>
					<p style="text-align:justify">Créée le 18 Avril 2008, la Fédération Interprofessionnelles des viandes rouges (FIVIAR) est une organisation professionnelle structurée qui regroupe tous les maillons du secteur des viandes rouges de l’amont à l’aval.</p>
					<p>La FIVIAR est membre de la Confédération Marocaine de l'Agriculture et du Développement Rural (COMADER).</p>
					<p style="text-align:justify">L'interprofession Viandes Rouges est composée des organisations professionnelles, légalement constituées, représentant les différentes activités de la filière.
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
					<div class="col-sm-4">
						<div class="media">
							<div class="media-left">
								<div class="icon icon-color icon-size-3" data-hover="rubberBand">
									<i class="fa fa-cubes"></i>
								</div>
							</div>
							<div class="media-body">
								<h4>Polyvalence</h4>
								<p>Contribuer à la réalisation des études et d’expertise nécessaires, dont notamment l’assainissement des circuits de la commercialisation.</p>
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
								<h4>Disponibilité</h4>
								<p>Le renforcement de la contribution de la filière des viandes rouges à la garantie de l’approvisionnement du pays en protéines d’origine animale.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-left">
								<div class="icon icon-color icon-size-3" data-hover="pulse">
									<i class="fa fa-font"></i>
								</div>
							</div>
							<div class="media-body">
								<h4>Proximité</h4>
								<p>Améliorer le fonctionnement et la transparence du marché par la connaissance de l’offre, de la demande et des mécanismes du marché.</p>
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
						<h1>FIVIAR , 10 ans d'existance</h1>
						<p>Un engagement de tous les professionnels de la filière viandes rouges.</p>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-5 text-right divcell">
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
				<h2>Formation</h2>
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
						<h4>Contactez Nous</h4>
						<address>Notre équipe travaille habituellement
						de 9h à 17h</address>
						<div class="heading-divider"></div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="icon icon-size-4 icon-color">
							<i class="fa fa-map-marker"></i>
						</div>
						<h4>Adresse</h4>
						<address>Avenue Attarfae, Secteur 19, Lot B9, Villa Houre, Hay Riad, Rabat</address>
						<div class="heading-divider"></div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="icon icon-size-4 icon-color">
							<i class="fa fa-phone"></i>
						</div>
						<h4>Téléphone/Fax</h4>
						<address>
							+212 (0)537 80 32 46 <br/>
						</address>
						<div class="heading-divider"></div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="icon icon-size-4 icon-color">
							<i class="fa fa-envelope-o"></i>
						</div>
						<h4>Email</h4>
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

<script>
	var element  = document.getElementsByClassName('gm-style-iw gm-style-iw-c');
	console.log(element);
	element.innerHTML = "New Heading";

	console.log(element);
</script>
@endsection
