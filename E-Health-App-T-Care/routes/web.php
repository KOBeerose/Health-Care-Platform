<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\UserController;
use App\Models\Consultation;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
})->name('accueil');
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

Route::get('/profile-edit', function () {
    return view('edit-profile');
})->name('edit')->middleware('auth');

Route::get('/consultations', function () {
    return view('consultations');
})->name('consultations')->middleware('auth');

Route::get('/consultations', [ConsultationController::class, 'showAll'])->name('consultations')->middleware('auth');

Route::post('/consultations', [ConsultationController::class, 'create']);

Route::get('/bookings', [BookingController::class, 'showAll'])->name('bookings')->middleware('auth');

Route::post('/bookings', [BookingController::class, 'create']);

Route::post('/finish/{id}', [BookingController::class, 'finish']);

Route::post('/delete/{id}', [BookingController::class, 'delete']);

Route::get('/medecins', [UserController::class, 'search']);
