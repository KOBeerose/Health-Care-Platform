@extends('layouts.app')

@section('content')

<div class="profile-page">
    <div class="justify-content-center contain">
        <div class="card">
            <div class="d-flex profile-content">
                <div class="image"> <img src="https://cdn4.iconfinder.com/data/icons/instagram-ui-twotone/48/Paul-18-512.png" class="rounded" width="155"> </div>
                <div class="ml-3">
                    <h4 class="mb-0 mt-0">{{ Auth::user()->title }}  {{ Auth::user()->name }} {{ Auth::user()->lastname }} </h4> <span>{{ Auth::user()->specialite }} </span>
                </div>
            </div>
        </div>

    </div>
        <div class="col-md-8 profile-infos">
           
            <div class="titre"> 
                <h2 class="profile-title">Informations</h2>
                <div class="title-lign"></div>
            </div>
        <div class="mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->email }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Adresse</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->adresse }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Ville</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->ville }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Numéro de Téléphone (cabinet)</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->phone_ca }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <a class="btn edit " target="" href="/profile-edit">Modifier</a>
                    </div>
            </div>
        </div>
    </div>

@endsection