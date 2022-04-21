@extends('layouts.app')

@section('content')

<div class="container profile_bookings">
  <div class="row">
    <div class="col existing_bookings">
      <h3><i class="fas fa-list"></i> Les rendez-vous</h3>
      <div class="bookings_section">
        <h4>Les rendez-vous d'aujourd'hui</h4>
        <div class="bookings_row">
          @foreach ($today as $booking)
            <div class="booking">
              <div class="booking_details">
                <div class="booking_name">{{ $booking->name }}</div>
                <div class="booking_time">{{ date('d/m/Y H:i', strtotime($booking->date)) }}</div>
              </div>
              @if ($booking->finished)
              <div class="booking_done">
                <i class="fas fa-check"></i> Cette consultation est terminee
              </div>
              @else
                <div class="booking_actions">
                  <form method="POST" action="/finish/{{ $booking->id }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Valider</button>
                  </form>
                  <form method="POST" action="/delete/{{ $booking->id }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $booking->id }}">
                    <button type="submit" class="annuler btn btn-danger">Annuler</button>
                  </form>
                </div>
              @endif
            </div>
          @endforeach
        </div>
      </div>
      <div class="bookings_section">
        <h4>Les autres rendez-vous</h4>
        <div class="bookings_row">
          @foreach ($other as $booking)
            <div class="booking">
              <div class="booking_details">
                <div class="booking_name">{{ $booking->name }}</div>
                <div class="booking_time">{{ date('d/m/Y H:i', strtotime($booking->date)) }}</div>
              </div>
              @if ($booking->finished)
              <div class="booking_done">
                <i class="fas fa-check"></i> Cette consultation est terminee
              </div>
              @else
                <div class="booking_actions">
                  <form method="POST" action="/finish/{{ $booking->id }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Valider</button>
                  </form>
                  <form method="POST" action="/delete/{{ $booking->id }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $booking->id }}">
                    <button type="submit" class="annuler btn btn-danger">Annuler</button>
                  </form>
                </div>
              @endif
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="col create_booking">
      <h3><i class="fas fa-calendar-alt"></i> Ajouter un rendez-vous</h3>
      <div>
        <form id="booking_form" method="POST" action="/bookings">
          @csrf
          <div class="mb-3">
            <label for="patient_name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="patient_name" name="name" placeholder="Entrez le nom du patient">
          </div>
          <div class="mb-3">
            <input id="datetimepicker" type="text" data-booked="{{ $booked_dates }}">
          </div>
          <input type="hidden" name="date" id="booking_date">
          <button type="submit" class="btn btn-primary save_booking">Enregistrer</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      </div>
      <div></div>
    </div>
  </div>
</div>

@endsection
