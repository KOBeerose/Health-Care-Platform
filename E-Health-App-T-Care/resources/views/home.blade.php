@extends('layouts.app')

@section('content')

<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Bienvenue {{  auth()->user()->title }} {{  auth()->user()->name }} {{  auth()->user()->lastname }} sur platefomre T-Care</h1>
    </div>
</section>

@endsection