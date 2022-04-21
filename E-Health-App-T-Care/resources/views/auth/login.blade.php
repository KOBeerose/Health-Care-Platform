@extends('layouts.app')

@section('content')

<div class="login mb-5">
    <div class="hover">
        <img src="assets/img/dr_0.jpg" class="img-fluid login-img">
        <h1 class="connect"><b>SE CONNECTER</b></h1>
    </div>

    <section class="se_connecter">
        <h1><b>SE CONNECTER</b></h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label" name="email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label mdp">Mot de passe</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label" for="checkbox"></label>
            </div> --}}
            <button name="login" type="submit" class="btn btn-primary mb-3">connecter</button><br>
            <a href="/register">Créer un nouveau compte</a>
        </form>
    </section>
</div>

@endsection