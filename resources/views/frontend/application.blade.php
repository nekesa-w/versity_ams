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

	<title> Versity | Home </title>

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

				<li><a href="">Future Students</a></li>

				<li class="has-submenu"><a href="#section5">Current Students</a>
					<ul class="sub-menu">
						<li><a href="#section2">AMS</a></li>
						<li><a href="#section3">E-Learning</a></li>
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
						<li><a href="#section2">Faculty of Art</a></li>
						<li><a href="#section3">Faculty of Design</a></li>
						<li><a href="#section3">Faculty of Arts and Science</a></li>
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
				<h2>Versity School <br> of Art & Design</h2>
				<div class="main-button">
					<a href=""><h6>Apply <em>Today</em></h6></a>
				</div>
			</div>
		</div>
	</section>

    <section class="">
        
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
							<li class="nav-item">
								<a href="" title="Transfer to Versity">Transfer to Versity</a>
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
								<a href="" title="Phone">0720022222</a>
							</li>
							<li class="nav-item">
								<a href="" title="Email">contact@versity.edu</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Postal Address">P.O. Box 00000 City Square</a>
							</li> 
							<li class="nav-item ">
								<a href="" title="Location">Versity Lane, off Versity Road, Nairobi, Kenya </a>
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