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

    <title> Login</title>

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
                @if(Session::has('loginId'))
                <li><a href="{{ route('application_form') }}">Application Form</a></li>
                <li><a href="{{ route('application_logout') }}">Logout</a></li>
                @else
                <li><a href="{{ route('application_login') }}">Login</a></li>
                @endif
            </ul>
        </nav>

    </header>

    <section class="section application">
        <div class="container-app">
            @if($errors->any())
            <h3 class="errors">{{$errors->first()}}</h3>
            @endif


            @if(session('success'))
            <h3 class="success">{{session('success')}}</h3>
            @endif

            <div class="heading-app">
                <h2>Login for Undergraduate Admission</h2>
                <p>Please fill in the form carefully and make sure all information is accurate</p>
            </div>

            <form action="application_login" method="POST">
                @csrf
                <label for="email">Email</label>
                <input id="email" name="email" type="email" required /><br>

                <label for="password">Password</label>
                <input id="password" name="password" type="password" required /><br>

                <input type="submit" value="Login"><br>
                <a href="{{ route('application_reg') }}"> Do not have an account? Register here </a><br><br>
                <a href="{{ route('admin_login') }}"> Not a user? Admin login here </a>
            </form>
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
                                <a href="{{ route('application_reg') }}" title="Applications">Undergraduate Applications</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('faculty_of_art') }}" title="Faculty of Art">Faculty of Art</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('faculty_of_design') }}" title="Faculty of Design">Faculty of Design</a>
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