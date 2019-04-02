<!-- HEADER -->
<header class="header header-light">

    <!-- HEADER EXTRA TOP -->
	<div class="header-extra-top" dir="ltr">
		<div class="container">
			<nav class="contact-info pull-left">
				<a href="tel:+212661905120" class="phone"><i class="fa fa-phone"></i> +212 6 61 90 51 20</a>
				<a href="mailto:fiviar@fiviar.ma" class="email"><i class="fa fa-envelope-o"></i> fiviar@fiviar.ma</a>
			</nav>
			<nav class="social-links pull-right">
				<!-- <a href=""><i class="fa fa-twitter"></i> <span>Twitter</span></a> -->
				<a href="https://www.facebook.com/FIVIAR.ma/" target="_blank"><i class="fa fa-facebook-square"></i> <span>فيسبوك</span></a>
				<!--<a href=""><i class="fa fa-youtube-play"></i> <span>يوتيوب</span></a> -->
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
				<input type="text" placeholder="اكتب واضغط على زر إنتر ...">
				<i class="fa fa-times" data-toggle="collapse" data-target=".navbar-search"></i>
			</div>
			<button type="button" class="fa fa-search" data-target=".navbar-search" data-toggle="collapse"></button>
		</form>
		-->
		<!-- /.navbar-form -->


		<div class="navbar-lang pull-right">
			<ul class="nav">
				<li class="dropdown"><a href="locale/ar" class="dropdown-toggle" data-toggle="dropdown"><span class="flag ma"></span></a>
					<ul class="dropdown-menu">
						<li><a href="locale/fr"><span class="flag fr"></span></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="divider pull-right"></div>

		<button class="navbar-toggle pull-right" data-target="#navbar" data-toggle="collapse" type="button">
			<i class="fa fa-bars"></i>
		</button>

		<style type="text/css">

			.navbar-nav > li > a
			{
			font-size: 16px !important;

			}
			.navbar .nav > li {
			  float: right !important;
			}

			.dropdown-menu > li > a
			{
    		font-size: 16px !important;
    		text-align: right !important;
			}

			.no-menu .header:not(.header-vertical) .navbar-collapse .navbar-nav > li.active > a{
				border-left-style: none;
    			border-right: 2px solid #da3636;
			}

			#dropdown-menu-ar{
			font-size: 13px !important;
			text-align: center !important;
			}

		</style>

		<!-- NAVBAR COLLAPSE -->
		<div id="navbar" class="navbar-collapse collapse pull-right">
			<ul class="nav navbar-nav">
				<li class="{{ Request::is('/','motdupresident','presentation','conseildadministration') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">ف.ب.ل.ح</a>
					<ul class="dropdown-menu sub-menu">
						<li class="dropdown">
							<a href="" style="padding-right:35px !important;">ف.ب.ل.ح</a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('motdupresident') }}">كلمة الرئيس</a></li>
								<li><a href="{{ url('presentation') }}">تقديم</a></li>
								<li><a href="{{ url('documents/statut.pdf') }}" target="_blank">الوضع</a></li>
								<!-- <li><a href="{{ url('conseildadministration') }}">المجلس الإداري</a></li> -->
							</ul>
						</li>
						<li class="dropdown">
							<a href="" style="padding-right:35px !important;">نشاط الإنتاج</a>
							<ul class="dropdown-menu">
								<li><a href="#" id="dropdown-menu-ar">ANPVR</a></li>
								<li><a href="#" id="dropdown-menu-ar">ANEB</a></li>
								<li><a href="http://www.anoc.ma" target="_blank" id="dropdown-menu-ar">ANOC</a></li>
								<li><a href="http://www.copag.ma/" target="_blank" id="dropdown-menu-ar">COPAG</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="" style="padding-right:35px !important;">نشاط التثمين و التحويل</a>
							<ul class="dropdown-menu">
								<li><a href="#" id="dropdown-menu-ar">ANAP</a></li>
								<li><a href="#" id="dropdown-menu-ar">ANTVH</a></li>
								<li><a href="#" id="dropdown-menu-ar">AMIV</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="" style="padding-right:35px !important;">النشاط التسويقي</a>
							<ul class="dropdown-menu">
								<li><a href="#" id="dropdown-menu-ar">ANC</a></li>
								<li><a href="#" id="dropdown-menu-ar">ANB</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="{{ Request::is('svr-presentation','svr-strategie','svr-galerie') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">قطاع اللحوم الحمراء</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('svr-presentation') }}">نظرة عامة حول القطاع</a></li>
						<li><a href="{{ url('svr-strategie') }}">استراتيجية التنمية</a></li>
						<li class="dropdown">
							<a href="" style="padding-right:35px !important;">عقد برنامج</a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('documents/CP 2009-2014.pdf') }}" target="_blank">عقد برنامج 2014</a></li>
								<li><a href="{{ url('documents/CP 2014 2020.pdf') }}" target="_blank">عقد برنامج 2016</a></li>
							</ul>
						</li>
						<li><a href="{{ url('svr-galerie') }}">الرواق</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('mercuriales') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">لوائح الأسعار</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('mercuriales') }}">تقديم</a></li>
						<li><a href="{{ url('documents/Rapport National Jan-Aout.pdf') }}" target="_blank">تقارير الأسعار</a></li>
						<li><a href="{{ url('http://51.254.62.147/Mercuriale') }}" target="_blank" style="font-size: 13px !important;">www.mercuriale-fiviar.ma</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('zoopole-presentation','zoopole-galerie') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 13px !important;">Zoopole</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('zoopole-presentation') }}">عرض مركز التدريب</a></li>
						<li><a href="{{ url('documents/Réalisation-Zoopole-2016-vf.pdf') }}" target="_blank">الجدول الزمني</a></li>
						<li><a href="{{ url('zoopole-galerie') }}">الرواق</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('marocarnmilk-presentation','marocarnmilk-galerie') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 13px !important;">Marocarn & Milk</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('marocarnmilk-presentation') }}">عرض المعرض</a></li>
						<li><a href="{{ url('marocarnmilk-galerie') }}">الرواق</a></li>
						<li><a href="{{ url('http://www.marocarne-milk.com') }}" target="_blank" style="font-size: 13px !important;">www.marocarne-milk.com</a></li>
					</ul>
				</li>
				<!--
				<li class="{{ Request::is('blog') ? "active" : "" }}">
				    <a href="{{ url('blog') }}">مدونة</a>
				</li>
				-->
				<li class="{{ Request::is('revue-de-presse','filmsinstitutionnels','reportages','radios','dossiers-de-presse') ? "active" : "" }} dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">صحافة</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="{{ url('revue-de-presse') }}">قراءة في الصحافة</a></li>
						<li><a href="{{ url('filmsinstitutionnels') }}">الأفلام المؤسسية</a></li>
						<li><a href="{{ url('reportages') }}">تقرير</a></li>
						<li><a href="{{ url('radios') }}">الإذاعات</a></li>
						<li><a href="{{ url('dossiers-de-presse') }}">بيان صحفي</a></li>
					</ul>
				</li>
				<li class="{{ Request::is('contact') ? "active" : "" }}">
					<a href="{{ url('contact') }}">إتصل بنا</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->

	</nav>
	<!-- /.navbar -->

</header>
<!-- /.header -->