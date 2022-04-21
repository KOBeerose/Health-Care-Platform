@extends('layouts.app')

@section('content')

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

@endsection