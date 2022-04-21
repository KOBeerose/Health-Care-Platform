@extends('layouts.app')

@section('content')

<div class="doctors_list container">
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
      @include('shared.search_form')
    </div>
    @foreach ($doctors as $doctor)
      <div class="col-lg-6">
        <div class="doctor">
          <div class="doctor_name"><i class="fas fa-user-md"></i> {{ $doctor->title }} {{ $doctor->name }} {{ $doctor->lastname }}</div>
          <div class="doctor_profession"><i class="fas fa-address-card"></i> {{ $doctor->specialite }}</div>
          <div class="doctor_adresse"><i class="fas fa-map-marker-alt"></i> {{ $doctor->adresse }}, {{ $doctor->ville }}</div>
          <div class="doctor_phone"><i class="fas fa-phone"></i> {{ $doctor->phone_ca }}</div>
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection
