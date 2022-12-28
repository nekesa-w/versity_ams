<!--
CREDITS FOR TEMPLATE

TemplateMo 557 Grad School
https://templatemo.com/tm-557-grad-school

-->

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> Undergraduate Admissions </title>

	<!-- Bootstrap core CSS -->
	<link href="{{asset('/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="{{asset('/frontend/assets/css/fontawesome.css') }}">
	<link rel="stylesheet" href="{{asset('/frontend/assets/css/templatemo-grad-school.css') }}">
	<link rel="stylesheet" href="{{asset('/frontend/assets/css/owl.css') }}">
	<link rel="stylesheet" href="{{asset('/frontend/assets/css/lightbox.css') }}">

</head>

<body>

	<header class="main-header clearfix" role="header">
		<div class="logo">
			<a href=""><em>Ver</em>sity</a>
		</div>

		<a href="" class="menu-link"><i class="fa fa-bars"></i></a>

		<nav id="menu" class="main-nav" role="navigation">
			<ul class="main-menu">

			<li class="has-submenu"><a href="#section5">Future Students</a>
					<ul class="sub-menu">
						<li><a href="#section2">Undergraduate Admissions</a></li>
						<li><a href="#section3">Graduate Admissions</a></li>
						</ul>
				</li>

				<li class="has-submenu"><a href="#section5">Current Students</a>
					<ul class="sub-menu">
						<li><a href="#section2">Student Login</a></li>
					</ul>
				</li>

				<li class="has-submenu"><a href="#section5">Faculty & Staff </a>
					<ul class="sub-menu">
						<li><a href="#section2">Vacancies</a></li>
						<li><a href="#section3">Staff Login</a></li>
					</ul>
				</li>

				<li class="has-submenu"><a href="#section5">Courses</a>
					<ul class="sub-menu">
						<li><a href="faculty_of_art">Faculty of Art</a></li>
						<li><a href="faculty_of_design">Faculty of Design</a></li>
						<li><a href="faculty_of_arts_and_science">Faculty of Arts and Science</a></li>
					</ul>
				</li>

				<li><a href="">About</a></li>
			</ul>
		</nav>

	</header>
	
	<section class="section main-banner" id="top" data-section="section1">
		<div class ="bg-image">
			<img src="{{ asset('/frontend/assets/images/artist-bg.jpg') }}">
		</div>

		<div class="image-overlay header-text">
			<div class="caption">
				<h2>Undergraduate <br> Admissions</h2>
			</div>
		</div>
	</section>

	<section class="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12">
					<div class="features-post">
						<div class="features-content">
							<div class="content-show">
								<h4><i class="fa fa-pencil"></i>Undergraduate</h4>
							</div>
							<div class="content-hide">
								<p> With so many programs to choose from, it can be overwhelming to find a program that best suits you. Explore our undergraduate majors and get ready to reach your full potential. <p>
								<div class="scroll-to-section"><a href="undergrad_admissions">View Courses.</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="features-post second-features">
						<div class="features-content">
							<div class="content-show">
								<h4><i class="fa fa-graduation-cap"></i>Graduate</h4>
							</div>
							<div class="content-hide">
								<p> Versity has a long standing tradition of contemporary thinking and practice in art and design. Our graduate degree programs offer the next generation of artists, designers and industry leaders a level of scholarship that is virtually unmatched.</p>
								<div class="scroll-to-section"><a href="grad_admissions">View Courses</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="features-post third-features">
						<div class="features-content">
							<div class="content-show">
								<h4><i class="fa fa-book"></i>Alumni</h4>
							</div>
							<div class="content-hide">
								<p>Whether you graduated 20 years ago or last year, you will always be part of Versity School of Art & Design. Please contact the Alumni Relations Office at alumni@versity.ke to keep in touch.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section why-us" data-section="section2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Why choose Versity?</h2>
					</div>
				</div>
				<div class="col-md-12">
					<div id='tabs'>
						<ul>
							<li><a href='#tabs-1'>Vision Statement</a></li>
							<li><a href='#tabs-2'>Mission Statment</a></li>
							<li><a href='#tabs-3'>Academic Plan </a></li>
						</ul>
						<section class='tabs-content'>
							<article id='tabs-1'>
								<div class="row">
									<div class="col-md-6">
										<div class = "why-us-photo">
											<img src="{{ asset('frontend/assets/images/choose1.jpg') }}" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<h4>Vision</h4>
										<p>Versity School of Design is a vibrant community of bold, curious and compassionate artists, designers and scholars imagining and creating a joyful, equitable and sustainable world.</p>
									</div>
								</div>
							</article>
							<article id='tabs-2'>
								<div class="row">
									<div class="col-md-6">
										<div class = "why-us-photo">
											<img src="{{ asset('frontend/assets/images/choose2.jpg') }}" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<h4>Mission Statement</h4>
										<p>Versity advances interdisciplinary art and design education and research grounded in liberal arts and science and driven by leading-edge technologies, innovative teaching and professional practice.</p>
									</div>
								</div>
							</article>
							<article id='tabs-3'>
								<div class="row">
									<div class="col-md-6">
										<div class = "why-us-photo">
											<img src="{{ asset('frontend/assets/images/choose3.jpg') }}" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<h4>Academic Plan</h4>
										<p>As you navigate through this four-year plan, you'll discover seven priorities with corresponding objectives that interconnect with this vision and take into consideration the current context in which we live.</p>
									</div>
								</div>
							</article>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section campus" data-section="section3">
		<div class ="campus-image">
			<img src="{{ asset('/frontend/assets/images/campus.jpg') }}">
		</div>

		<div class="campus-overlay header-text">
			<div class="caption">
				<h2>“Creativity takes courage.”
				<br>- Henri Matisse </h2>
				<p></p>
			</div>
		</div>
	</section>

	<section class="section about" data-section="section5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h6 class="text-uppercase">Connect</h6>
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item">
								<a href="" title="Facebook">Facebook</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Twitter">Twitter</a>
							</li> 
							<li class="nav-item">
								<a href="" title="LinkedIn">LinkedIn</a>
							</li> 
							<li class="nav-item">
								<a href="" title="YouTube">YouTube</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Instagram">Instagram</a>
							</li>
						</ul>
					</nav>
				</div> 

				<div class="col-md-3">
					<h6 class="text-uppercase">Study</h6> 
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item">
								<a href="" title="Admissions">Admissions</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Undergraduate Programs">Undergraduate Programs</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Graduate Studies">Graduate Programs</a>
							</li> 
						</ul>
					</nav>
				</div> 

				<div class="col-md-3">
					<h6 class="text-uppercase">Work</h6> 
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item">
								<a href="" title="Careers">Employment Opportunities</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Student Jobs">Student Jobs</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Alumni Jobs">Alumni Jobs</a>
							</li>
						</ul>
					</nav>
				</div> 
				
				<div class="col-md-3">
					<h6 class="text-uppercase">Contact</h6> 
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item">
								<p>0720022222</p>
							</li>
							<li class="nav-item">
								<p>contact@versity.edu</p>
							</li> 
							<li class="nav-item">
								<p>P.O. Box 00000 City Square</p>
							</li> 
							<li class="nav-item ">
								<p>Versity Lane, off Versity Road, Nairobi, Kenya </p>
							</li> 
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p><i class="fa fa-copyright"></i> Copyright 2022 Versity.
				</div>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<!-- Bootstrap core JavaScript -->
	<script src="{{ asset('/frontend/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

	<script src="{{ asset('/frontend/assets/js/isotope.min.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/owl-carousel.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/lightbox.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/tabs.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/video.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/slick-slider.js') }}"></script>
	<script src="{{ asset('/frontend/assets/js/custom.js') }}"></script>

	<script>
		//according to loftblog tut
		$('.nav li:first').addClass('active');

		var showSection = function showSection(section, isAnimate) {
			var
				direction = section.replace(/#/, ''),
				reqSection = $('.section').filter('[data-section="' + direction + '"]'),
				reqSectionPos = reqSection.offset().top - 0;

			if (isAnimate) {
				$('body, html').animate({
						scrollTop: reqSectionPos
					},
					800);
			} else {
				$('body, html').scrollTop(reqSectionPos);
			}

		};

		var checkSection = function checkSection() {
			$('.section').each(function() {
				var
					$this = $(this),
					topEdge = $this.offset().top - 80,
					bottomEdge = topEdge + $this.height(),
					wScroll = $(window).scrollTop();
				if (topEdge < wScroll && bottomEdge > wScroll) {
					var
						currentId = $this.data('section'),
						reqLink = $('a').filter('[href*=\\#' + currentId + ']');
					reqLink.closest('li').addClass('active').
					siblings().removeClass('active');
				}
			});
		};

		$('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
			if ($(e.target).hasClass('external')) {
				return;
			}
			e.preventDefault();
			$('#menu').removeClass('active');
			showSection($(this).attr('href'), true);
		});

		$(window).scroll(function() {
			checkSection();
		});
	</script>
</body>

</html>