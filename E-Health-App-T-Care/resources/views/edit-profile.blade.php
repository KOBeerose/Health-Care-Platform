@extends('layouts.app')

@section('content')

<div class="profile-page">
    <div class="col-md-8 profile-infos">
           
        <div class="titre"> 
            <h2 class="profile-title">Modifier Les Informations</h2>
            <div class="title-lign"></div>
        </div>
    <form method="POST" action="{{ route('user-profile-information.update') }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Prénom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="form-control form-control-sm @error('name') is-invalid @enderror" type="text" name="name"  value="{{ old('name') ?? auth()->user()->name }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Nom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="form-control form-control-sm @error('lastname') is-invalid @enderror" type="text" name="lastname"  value="{{ old('lastname') ?? auth()->user()->lastname }}" required autocomplete="name" autofocus>
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="form-control form-control-sm @error('email') is-invalid @enderror" type="text" name="email"  value="{{ old('email') ?? auth()->user()->email }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                    
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Adresse</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="form-control textarea @error('adresse') is-invalid @enderror" placeholder="Exemple : 11, Avenue du 16 Novembre" rows="3" name="adresse" value="{{ old('adresse') ?? auth()->user()->adresse }}">
                        @error('adresse')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror                  
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Ville</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        @include('sets.cities')
                        @error('ville')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Numéro de Téléphone (cabinet)</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="form-control form-control-sm @error('phone_ca') is-invalid @enderror" type="text" name="phone_ca"  value="{{ old('phone_ca') ?? auth()->user()->phone_ca }}" required>
                        @error('phone_ca')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                     
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Numéro de portable</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="form-control form-control-sm @error('phone_per') is-invalid @enderror" type="text" name="phone_per"  value="{{ old('phone_per') ?? auth()->user()->phone_per }}" required>
                        @error('phone_per')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                     
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <input class="btn btn-primary mb-3" type="submit" value="Modifier" required><br>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

@endsection