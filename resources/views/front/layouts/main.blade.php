<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>BritBite</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/images/favicon.png') }}" />

  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{ asset('front/plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/fancybox/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/plugins/aos/aos.css') }}">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

  <style>
    .nav-link {
        color:#fff Important;
    }
  </style>

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav" style="">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0" style="padding-bottom: 1rem !important;">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="{{ asset('front/images/logo_new.png') }}" width="90px" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown active">
          <a class="nav-link active" href="/">Home
          </a>
        <li class="nav-item @@about">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


@yield('content')


<!--============================
=            Footer            =
=============================-->
<footer>
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
            <div class="block">
              <a href="index.html"><img src="{{ asset('front/images/logo_new.png') }}" width="150px" alt="footer-logo"></a>
              <!-- Social Site Icons -->
              <ul class="social-icon list-inline">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/themefisher"><i class="ti-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://twitter.com/themefisher"><i class="ti-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/themefisher/"><i class="ti-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
            <div class="block-2">
              <!-- heading -->
              <h6>Resources</h6>
              <!-- links -->
              <ul>
                <li><a href="https://app.britbite.com/register">Singup</a></li>
                <li><a href="https://app.britbite.com/login">Login</a></li>
                {{-- <li><a href="blog.html">Blog</a></li> --}}
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
            <div class="block-2">
              <!-- heading -->
              <h6>Company</h6>
              <!-- links -->
              <ul>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                {{-- <li><a href="/team">Team</a></li> --}}
                <li><a href="/terms">Terms and Conditions</a></li>
                <li><a href="/privacy">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-3 col-6 mt-5 mt-lg-0">
            <div class="block-2">
              <!-- heading -->
              <h6>Get In Touch</h6>
              <!-- links -->
              <ul>
                {{-- <li><a href="career.html">Career</a></li> --}}
                <li>Address: BritBite Limited, Lock Studio, 7 Corsicen sq, E3 3YD</li>
                <li>Email: Support@BritBite.com</li>
                <li>Phone: 02080576330</li>
                {{-- <li><a href="team.html">Investor</a></li> --}}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center bg-dark py-4">
      <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="/{{ url('/') }}">BritBite</a></small class="text-secondary">
    </div>
  </footer>


    <!-- To Top -->
    <div class="scroll-top-to">
      <i class="ti-angle-up"></i>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('front/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('front/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('front/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('front/plugins/aos/aos.js') }}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="{{ asset('front/plugins/google-map/gmap.js') }}"></script>

    <script src="{{ asset('front/js/script.js') }}"></script>
  </body>

  </html>
