<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>T-Care</title>

  <!-- Favicons -->
  <link href="assets/img/T-Care-m.png" rel="icon">
  <link href="assets/img/T-Care-m.png" rel="logo">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/datepicker.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">takecare@gmail.com</a>
        <i class="bi bi-phone"></i> +212 606-060606
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      @auth

        <a href="{{ route('home') }}" class="logo me-auto"><img src="assets/img/T-Care.png" alt="logo" class="img-fluid"></a>

      @else

        <a href="{{ route('accueil') }}" class="logo me-auto"><img src="assets/img/T-Care.png" alt="logo" class="img-fluid"></a>

      @endauth
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          @guest
            <li><a class="nav-link scrollto {{ request()->is('accueil') ? 'active' : '' }}" href="{{ route('accueil') }}">Accueil</a></li>
            <li><a class="nav-link scrollto {{ request()->is('services') ? 'active' : '' }}" href="{{ route('services') }}">Sevices</a></li>
            <li><a class="nav-link scrollto {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
            <li><a class="nav-link scrollto {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Se connecter</a></li>
            <li><a class="nav-link scrollto {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">S'inscrire</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
          @else
            <li><a class="nav-link scrollto {{ request()->is('accueil') ? 'active' : '' }}" href="{{ route('accueil') }}">Accueil</a></li>
            <li><a class="nav-link scrollto {{ request()->is('bookings') ? 'active' : '' }}" href="{{ route('bookings') }}">Rendez-vous</a></li>
            <li><a class="nav-link scrollto {{ request()->is('consultations') ? 'active' : '' }}" href="{{ route('consultations') }}">Consultation</a></li>
            <li class="nav-link dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('profile') }}">{{ __('Profile') }}</a></li>
                @if (auth()->user()->is_admin)
                  <li><a class="dropdown-item" href="admin">{{ __('Admin') }}</a></li>
                @endif
                <li> <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                      @csrf
                  </form>
                </li>

              </ul>
            </li>
            </ul>
          @endguest

      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>T-Care</h3>
                  <strong>Téléphone:</strong> +212 606 060606<br>
                  <strong>Email:</strong> takecare@gmail.com<br>
                </p>
              </div>

              <div class="col-lg-6 col-md-6 footer-links">
                <h4>Liens Utiles</h4>
                <div class="foot">
                  <a href="{{ route('accueil') }}">Accueil</a>
                  |<a href="{{ route('services') }}">Nos services</a>
                  |<a href="{{ route('contact') }}">Contact</a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="container d-md-flex py-4">

          <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
              &copy; Copyright <strong><span>T-Care</span></strong>. All Rights Reserved
            </div>
          </div>
          <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#!" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#!" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#!" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#!" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#!" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </footer><!-- End Footer -->

      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
      <script src="assets/vendor/purecounter/purecounter.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

      <!-- Template Main JS File -->
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/js/datepicker.js"></script>
      <script src="assets/js/bookings.js"></script>

    </body>

    </html>
