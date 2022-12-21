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

	<!-- ***** Header Area Start ***** -->
	<header class="main-header clearfix" role="header">
		<div class="logo">
			<a href=""><em>Ver</em>sity</a>
		</div>

		<a href="" class="menu-link"><i class="fa fa-bars"></i></a>

		<nav id="menu" class="main-nav" role="navigation">
			<ul class="main-menu">

				<li class="has-submenu"><a href="">Future Students</a>
					<ul class="sub-menu">
						<li><a href="#section3">Admissions</a></li>
						<li><a href="#section4">Applications</a></li>
					</ul>
				</li>

				<li class="has-submenu"><a href="#section5">Current Students</a>
					<ul class="sub-menu">
						<li><a href="#section2">AMS</a></li>
						<li><a href="#section3">Student Login</a></li>
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

				<li><a href="">Contact</a></li>
			</ul>
		</nav>

	</header>
	<!-- ***** Header Area End ***** -->


	<!-- ***** Main Banner Area Start ***** -->
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
	<!-- ***** Main Banner Area End ***** -->

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
								<div class="scroll-to-section"><a href="#">View Courses.</a></div>
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
								<div class="scroll-to-section"><a href="#">View Courses</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="features-post third-features">
						<div class="features-content">
							<div class="content-show">
								<h4><i class="fa fa-book">Alumni</i></h4>
							</div>
							<div class="content-hide">
								<p>The  Alumni Relations Office is an international alumni office established with the support of Versity University Foundation to promote and coordinate activities world-wide. The Alumni Relations office is responsible for promoting the interests of Versity Alumni worldwide.</p>
								<div class="scroll-to-section"><a href="">More Info.</a></div>
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
										<p>OCAD University advances interdisciplinary art and design education and research grounded in liberal arts and science and driven by leading-edge technologies, innovative teaching and professional practice.</p>
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
										<p>As you navigate through this six-year plan, you'll discover seven priorities with corresponding objectives that interconnect with this vision and take into consideration the current context in which we live. These speak to creating space to facilitate and nurture the growth and success of the next-generation of artists, designers and scholars as they tackle some of the most complex challenges of our time.</p>
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

	<section class="section courses" data-section="section4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Choose Your Course</h2>
					</div>
				</div>

				<div class="owl-carousel owl-theme">
					<div class="item">
						<img src="assets/images/courses-01.jpg" alt="Course #1">
						<div class="down-content">
							<h4>Digital Marketing</h4>
							<p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
							<div class="author-image">
								<img src="assets/images/author-01.png" alt="Author 1">
							</div>
							<div class="text-button-pay">
								<a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-02.jpg" alt="Course #2">
						<div class="down-content">
							<h4>Business World</h4>
							<p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
							<div class="author-image">
								<img src="assets/images/author-02.png" alt="Author 2">
							</div>
							<div class="text-button-free">
								<a href="#">Free <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-03.jpg" alt="Course #3">
						<div class="down-content">
							<h4>Media Technology</h4>
							<p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
							<div class="author-image">
								<img src="assets/images/author-03.png" alt="Author 3">
							</div>
							<div class="text-button-pay">
								<a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-04.jpg" alt="Course #4">
						<div class="down-content">
							<h4>Communications</h4>
							<p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
							<div class="author-image">
								<img src="assets/images/author-04.png" alt="Author 4">
							</div>
							<div class="text-button-free">
								<a href="#">Free <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-05.jpg" alt="">
						<div class="down-content">
							<h4>Business Ethics</h4>
							<p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
							<div class="author-image">
								<img src="assets/images/author-05.png" alt="">
							</div>
							<div class="text-button-pay">
								<a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-01.jpg" alt="">
						<div class="down-content">
							<h4>Photography</h4>
							<p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
							<div class="author-image">
								<img src="assets/images/author-01.png" alt="">
							</div>
							<div class="text-button-free">
								<a href="#">Free <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-02.jpg" alt="">
						<div class="down-content">
							<h4>Web Development</h4>
							<p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
							<div class="author-image">
								<img src="assets/images/author-02.png" alt="">
							</div>
							<div class="text-button-free">
								<a href="#">Free <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-03.jpg" alt="">
						<div class="down-content">
							<h4>Learn HTML CSS</h4>
							<p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
							<div class="author-image">
								<img src="assets/images/author-03.png" alt="">
							</div>
							<div class="text-button-pay">
								<a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-04.jpg" alt="">
						<div class="down-content">
							<h4>Social Media</h4>
							<p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
							<div class="author-image">
								<img src="assets/images/author-04.png" alt="">
							</div>
							<div class="text-button-pay">
								<a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-05.jpg" alt="">
						<div class="down-content">
							<h4>Digital Arts</h4>
							<p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
							<div class="author-image">
								<img src="assets/images/author-05.png" alt="">
							</div>
							<div class="text-button-free">
								<a href="#">Free <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/courses-01.jpg" alt="">
						<div class="down-content">
							<h4>Media Streaming</h4>
							<p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
							<div class="author-image">
								<img src="assets/images/author-01.png" alt="">
							</div>
							<div class="text-button-pay">
								<a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="section about" data-section="section6">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h6 class="text-uppercase"><em>Connect</em></h6>
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
								<a href="//www.youtube.com/ocaduniversity" title="YouTube">YouTube</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Instagram">Instagram</a>
							</li>
						</ul>
					</nav>
				</div> 

				<div class="col-md-3">
					<h6 class="text-uppercase"><em>Study</em></h6> 
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item">
								<a href="" title="Admissions">Admissions</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Undergraduate Programs">Undergraduate Programs</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Graduate Studies">Graduate Studies</a>
							</li> 
							<li class="nav-item">
								<a href="" title="Continuing Studies">Continuing Studies</a>
							</li>
						</ul>
					</nav>
				</div> 

				<div class="col-md-3">
					<h6 class="text-uppercase"><em>Work</em></h6> 
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
					<h6 class="text-uppercase"><em>Contact</em></h6> 
					<nav>
						<ul class="footer-links nav flex-column">
							<li class="nav-item text-white">416.977.6000</li> 
							<li class="nav-item">
								<a href="/about/media" title="Media">Media</a>
							</li> 
							<li class="nav-item">
								<a href="https://map.ocadu.ca/" title="Campus Map" target="_blank">Campus Map</a>
							</li> 
							<li class="nav-item text-white">100 McCaul Street, Toronto, Ontario, Canada, M5T 1W1</li> 
							<li class="nav-item">
								<a href="/about/accessibility" target="_blank">Accessibility at OCAD U</a>
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