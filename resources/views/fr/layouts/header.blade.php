<style type="text/css">
	.gm-style-iw p {
    	color: #1a1a1a;
	}
</style>
<!-- HEADER -->
<header class="header header-light">

    <!-- HEADER EXTRA TOP -->
	<div class="header-extra-top">
		<div class="container">
			<nav class="contact-info pull-left">
				<a href="tel:+212661905120" class="phone"><i class="fa fa-phone"></i> +212 6 61 90 51 20</a>
				<a href="mailto:fiviar@fiviar.ma" class="email"><i class="fa fa-envelope-o"></i> fiviar@fiviar.ma</a>
			</nav>
			<nav class="social-links pull-right">
				<!-- <a href=""><i class="fa fa-twitter"></i> <span>Twitter</span></a> -->
				<a href=""><i class="fa fa-facebook-square"></i> <span>Facebook</span></a>
				<!-- <a href=""><i class="fa fa-youtube-play"></i> <span>Youtube</span></a> -->
				<!-- <a href=""><i class="fa fa-linkedin"></i> <span>Linkedin</span></a> -->
				<!-- <a href=""><i class="fa fa-instagram"></i> <span>Instagram</span></a> -->
				<!-- <a href=""><i class="fa fa-behance"></i> <span>Behance</span></a> -->
			</nav>
		</div>
	</div>
	<!-- /.header-extra-top -->

	<!-- NAVBAR -->
	<nav class="navbar">

		<!-- NAVBAR BRAND -->
		<a class="navbar-brand pull-left" href="{{ url('/') }}">
			<img src="{{ asset('images/fiviarlogo.png') }}" alt="Fiviar">
		</a>
		<!-- /.navbar-brand -->

		<!-- NAVBAR FORM -->
		<!--
		<form class="navbar-form pull-right">
			<div class="navbar-search collapse">
				<input type="text" placeholder="Tapez et appuyez sur Entrer...">
				<i class="fa fa-times" data-toggle="collapse" data-target=".navbar-search"></i>
			</div>
			<button type="button" class="fa fa-search" data-target=".navbar-search" data-toggle="collapse"></button>
		</form>
		-->
		<!-- /.navbar-form -->


		<div class="navbar-lang pull-right">
			<ul class="nav">
				<li class="dropdown"><a href="locale/fr" class="dropdown-toggle" data-toggle="dropdown"><span class="flag fr"></span></a>
					<ul class="dropdown-menu">
						<li><a href="locale/ar"><span class="flag ma"></span></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="divider pull-right"></div>

		<button class="navbar-toggle pull-right" data-target="#navbar" data-toggle="collapse" type="button">
			<i class="fa fa-bars"></i>
		</button>

		<!-- NAVBAR COLLAPSE -->
		<div id="navbar" class="navbar-collapse collapse pull-right">
			<ul class="nav navbar-nav">
				<li class="{{ Request::is('/','motdupresident','presentation','conseildadministration') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">FIVIAR</a>
					<ul class="dropdown-menu sub-menu">
						<li class="dropdown">
							<a href="">Fiviar</a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('motdupresident') }}">Mot du Président</a></li>
								<li><a href="{{ url('presentation') }}">Présentation</a></li>
								<li><a href="{{ url('documents/statut.pdf') }}" target="_blank">Statut</a></li>
								<!-- <li><a href="{{ url('conseildadministration') }}">Conseil d'administration</a></li> -->
							</ul>
						</li>
						<li class="dropdown">
							<a href="">Activité de production</a>
							<ul class="dropdown-menu">
								<li><a href="#">ANPVR</a></li>
								<li><a href="#">ANEB</a></li>
								<li><a href="http://www.anoc.ma" target="_blank">ANOC</a></li>
								<li><a href="http://www.copag.ma/" target="_blank">COPAG</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="" style="padding-right:30px !important;">Activité de valorisation et transformation</a>
							<ul class="dropdown-menu">
								<li><a href="#">ANAP</a></li>
								<li><a href="#">ANTVH</a></li>
								<li><a href="#">AMIV</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="">Activité de commercialisation</a>
							<ul class="dropdown-menu">
								<li><a href="#">ANC</a></li>
								<li><a href="#">ANB</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="{{ Request::is('svr-presentation','svr-strategie','svr-galerie') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Secteur Viandes Rouges</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('svr-presentation') }}">Présentation du secteur</a></li>
						<li><a href="{{ url('svr-strategie') }}">Stratégie de développement</a></li>
						<li class="dropdown">
							<a href="">Contrat Programme</a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('documents/CP 2009-2014.pdf') }}" target="_blank">Contrat Programme 2014</a></li>
								<li><a href="{{ url('documents/CP 2014 2020.pdf') }}" target="_blank">Contrat Programme 2016</a></li>
							</ul>
						</li>
						<li><a href="{{ url('svr-galerie') }}">Galerie</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('mercuriales') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Mercuriales</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('mercuriales') }}">Présentation</a></li>
						<li><a href="{{ url('documents/Rapport National Jan-Aout.pdf') }}" target="_blank">Rapports de prix</a></li>
						<li><a href="{{ url('http://51.254.62.147/Mercuriale') }}" target="_blank">www.mercuriale-fiviar.ma</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('zoopole-presentation','zoopole-galerie') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Zoopole</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('zoopole-presentation') }}">Présentation du centre de formation</a></li>
						<li><a href="{{ url('documents/Réalisation-Zoopole-2016-vf.pdf') }}" target="_blank">Planning</a></li>
						<li><a href="{{ url('zoopole-galerie') }}">Galerie</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('marocarnmilk-presentation','marocarnmilk-galerie') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Marocarn & Milk</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('marocarnmilk-presentation') }}">Présentation du salon</a></li>
						<li><a href="{{ url('marocarnmilk-galerie') }}">Galerie</a></li>
						<li><a href="{{ url('http://www.marocarne-milk.com') }}" target="_blank">www.marocarne-milk.com</a></li>
					</ul>
				</li>
				<!--
				<li class="{{ Request::is('blog') ? "active" : "" }}">
				    <a href="{{ url('blog') }}">Blog</a>
				</li>
				-->
				<li class="{{ Request::is('revue-de-presse','filmsinstitutionnels','reportages','radios','dossiers-de-presse') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Presse</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('revue-de-presse') }}">Revue de Presse</a></li>
						<li><a href="{{ url('filmsinstitutionnels') }}">Films Institutionnels</a></li>
						<li><a href="{{ url('reportages') }}">Reportages</a></li>
						<li><a href="{{ url('radios') }}">Radios</a></li>
						<li><a href="{{ url('dossiers-de-presse') }}">Dossier de presse</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('contact') ? "active" : "" }}">
					<a href="{{ url('contact') }}">Contact</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->

	</nav>
	<!-- /.navbar -->

</header>
<!-- /.header -->