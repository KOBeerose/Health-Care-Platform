@extends('layouts.app')

@section('content')

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
            <h4><a href="/medecins">Chercher un médecin</a></h4>
            <p>Notre application vous donne le choix de sélectionner le médecin le plus convenable pour vous.</p>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4><a href="/medecins">Réservation</a></h4>
            <p>Vous êtes capable maintenant de choisir le rendez-vous le plus adéquat à vos besoins.</p>
          </div>
        </div>

      </div>

    </div>
</section><!-- End Services Section -->

@endsection