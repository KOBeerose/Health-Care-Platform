<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>T-Care</title>

  <!-- Favicons -->
  <link href="assets/img/T-Care-m.png" rel="icon">
  <link href="assets/img/T-Care-m.png" rel="logo">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

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

      <a href="{{ route('accueil') }}" class="logo me-auto"><img src="assets/img/T-Care.png" alt="logo" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto {{ request()->is('accueil') ? 'active' : '' }}" href="#hero">Accueil</a></li>
          @auth
          <li><a class="nav-link scrollto {{ request()->is('bookings') ? 'active' : '' }}" href="{{ route('bookings') }}">Rendez-vous</a></li>
          <li><a class="nav-link scrollto {{ request()->is('consultations') ? 'active' : '' }}" href="{{ route('consultations') }}">Consultation</a></li>
          <li class="nav-link dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li> <a class="dropdown-item" href="{{ route('profile') }}">{{ __('Profile') }}</a></li>
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
          @else
              <li><a class="nav-link scrollto {{ request()->is('services') ? 'active' : '' }}" href="#services">Services</a></li>
              <li><a class="nav-link scrollto {{ request()->is('conatct') ? 'active' : '' }}" href="#contact">Contact</a></li>
              <li><a class="nav-link scrollto {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Se connecter</a></li>
              <li><a class="nav-link scrollto {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">S'inscrire</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Bienvenue sur platefomre T-Care</h1>
      <h2>Nous vous aiderons à trouver un médecin proche de vous</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Pourquoi T-Care?</h3>
              <p>
                Notre application est au service de tout le monde , elle facilite au médecin d'organiser le suivi médical de leurs patients et vous permet de chercher un médecin convenable .
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Une résponsivité</h4>
                    <p>Vous pouvez profiter de nos services sur votre Pc , tablette ou téléphone!</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Une sécurité</h4>
                    <p>La sécurité et la protection de vos données est une priorité chez notre équipe.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Un service gratuit</h4>
                    <p>L'accès à nos services est totalement gratuit. vous êtes les bienvenues chez nous!</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Search bar ======= -->
    <div class="container" id="search"> 
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          @include('shared.search_form')
        </div>
      </div>
    </div>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Docteurs</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Patients</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Consultations</p>
            </div>
          </div>

        </div>

      </div>
    </section> <!--End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Nos Services</h2>
          <p>T-Care est le meilleur choix pour assurer une rencontre bien organisée avec votre médecin et pour avoir un suivi continue de votre état sanitaire. </p>
        </div>

        <div class="row">
          <div class="col-lg-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4><a href="#search">Chercher un médecin</a></h4>
              <p>Notre application vous donne le choix de sélectionner le médecin le plus convenable pour vous.</p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="#search">Réservation</a></h4>
              <p>Vous êtes capable maintenant de choisir le rendez-vous le plus adéquat à vos besoins.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Nos Docteurs</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Nazih Daoudi</h4>
                <span>Pédiatre</span>
                <p>Ça fait plus de 6 mois que nous utilisons T-Care dans notre cabinet et mes patients sont très satisfaits.</p>
                <div class="social">
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                  <a href="#"><i class="ri-linkedin-box-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Sara El Ibrahimi</h4>
                <span>Psychiatre</span>
                <p>T-Care est un véritable avantage pour s'organiser et pouvoir consulter son planning sans être au cabinet.</p>
                <div class="social">
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                  <a href="#"><i class="ri-linkedin-box-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Ali El Ibrahimi</h4>
                <span>Traumatologue, Orthopédiste</span>
                <p>C’est une équipe efficace et compétente. Les rendez-vous sont très bien gérés, (...) C’est un outil indispensable pour la gestion d’un cabinet médical.</p>
                <div class="social">
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                  <a href="#"><i class="ri-linkedin-box-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Dr. Fatiha Alaoui</h4>
                <span>Neurochirurgienne</span>
                <p>L'application est parfaite! Je la recommande.<br></p>
                <div class="social">
                  <a href="#"><i class="ri-twitter-fill"></i></a>
                  <a href="#"><i class="ri-facebook-fill"></i></a>
                  <a href="#"><i class="ri-instagram-fill"></i></a>
                  <a href="#"><i class="ri-linkedin-box-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Oussama.jpg" class="testimonial-img" alt="">
                  <h3>Oussama Ennachite</h3>
                  <h4>Ceo &amp; Co-Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    L'idée était de digitaliser le travail de la secrétaire et une partie de celui du médecin , et cela a parfaitement réussi.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Salma.jpeg" class="testimonial-img" alt="">
                  <h3>Salma El Marbouh</h3>
                  <h4>CTO &amp; Co-Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Notre portail Web dédié à la participation des patients vous permet d'accéder immédiatement aux informations (pas besoin de formulaires encombrants, d'appels longs, Ou problème administratif) et en toute sécurité
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Je suis fier de participer à ce travail car c'est le futur de la santé
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Vous avez besoin de plus d'informations ? N'hésitez pas de nous contacter!</p>
        </div>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>takecare@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>+212 606 060606</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Chargement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé. Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer le message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>T-Care</h3>
              <strong>Téléphone:</strong> +212 606 060606<br>
              <strong>Email:</strong> takecare@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Liens Utiles</h4>
            <div class="foot">
              <a href="#">Accueil</a>
              |<a href="#services">Nos services</a>
              |<a href="#contact">Contact</a>
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
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
