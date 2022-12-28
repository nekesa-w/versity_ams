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

    <title> Faculty of Design </title>

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
            <a href="{{ route('home') }}"><em>Ver</em>sity</a>
        </div>

        <a href="" class="menu-link"><i class="fa fa-bars"></i></a>

        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">

                <li class="has-submenu"><a href="">Future Students</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('undergrad_admissions') }}">Undergraduate Admissions</a></li>
                        <li><a href="#section3">Graduate Admissions</a></li>
                    </ul>
                </li>

                <li class="has-submenu"><a href="">Current Students</a>
                    <ul class="sub-menu">
                        <li><a href="#section2">Student Login</a></li>
                    </ul>
                </li>

                <li class="has-submenu"><a href="">Staff </a>
                    <ul class="sub-menu">
                        <li><a href="#section2">Vacancies</a></li>
                        <li><a href="#section3">Staff Login</a></li>
                    </ul>
                </li>

                <li class="has-submenu"><a href="">Faculty</a>
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
        <div class="bg-image">
            <img src="{{ asset('/frontend/assets/images/facultydesign.jpg') }}">
        </div>

        <div class="image-overlay header-text">
            <div class="caption">
                <h2>Faculty of Design</h2>
                <p>Creating objects, communications, environments and experiences that nurture community, harmonize technology, satisfy needs and empower individuals.
                <p>
            </div>
        </div>
    </section>

    <section class="section courses" data-section="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="course-heading">
                        <h2>Choose Your Course</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('/frontend/assets/images/advertising.webp') }}" alt="Advertising">
                        <div class="down-content">
                            <h4>Advertising</h4>
                            <p>Need over want. Concept before execution. Strategy before style. Messages that combine powerful language and compelling imagery. Recognizing social influence. Developing a sense of accountability.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('/frontend/assets/images/environ.jpg') }}" alt="Environmental Design">
                        <div class="down-content">
                            <h4>Environmental Design</h4>
                            <p>Designing ourselves back into the environment by creating expressive interior and architectural experiences that nurture community.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('/frontend/assets/images/graphic.jpeg') }}" alt="Graphic Design">
                        <div class="down-content">
                            <h4>Graphic Design</h4>
                            <p>Minimizing harm and emphasizing the good we can do. Offering a strong focus on design process, typography, image-making and critical, strategic thinking. Mindful design systems for everyone and everything.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('/frontend/assets/images/illustration.jpg') }}" alt="Illustration">
                        <div class="down-content">
                            <h4>Illustration</h4>
                            <p>Developing one own individual artistic expressions to critically reflect on society. Centered on knowledge and skills that create effective, communicative and artful images that function as a complement to the written word.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('/frontend/assets/images/industrial.jpg') }}" alt="Industrial Design">
                        <div class="down-content">
                            <h4>Industrial Design</h4>
                            <p>Designing products and processes that take into account the next seven generations, including consumer and commercial products; furniture; interaction and experience design; strategic creativity; applied innovation.</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="{{ asset('/frontend/assets/images/materialart.jpg') }}" alt="Material Art & Design">
                        <div class="down-content">
                            <h4>Material Art & Design</h4>
                            <p>Deepening our relationships to the materials that connect us to the craft of making. Offering two concentrations: Jewellery/Metalsmithing and Textiles, allowing students to work from either an art or design perspective.</p>
                        </div>
                    </div>
                </div>
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
                                <a href="{{ route('undergrad_admissions') }}" title="Undergraduate Programs">Undergraduate Programs</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('grad_admissions') }}" title="Graduate Programs">Graduate Programs</a>
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

</body>

</html>