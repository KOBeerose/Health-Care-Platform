<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{

  public function finish(Request $r, $id) {

    $booking = Booking::find($id);

    var_dump('id is' .  $id);

    $booking->finished = true;

    $booking->save();

    return redirect()->route('bookings');

  }

  public function delete(Request $r) {

    $booking = Booking::find($r->input('id'));

    $booking->delete();

    return redirect()->route('bookings');

  }

  public function showAll() {

    $user = auth()->user();

    $booked = $user->bookings()->get();
    $today = $booked->where('date', '<', date('Y-m-d', strtotime('tomorrow')));
    $other = $booked->where('date', '>', date('Y-m-d 23:59:59'));

    $booked_dates = $booked->map(function($booking){
      return $booking->date;
    });

    return view('bookings', [
        'today' => $today,
        'other' => $other,
        'booked_dates' => json_encode($booked_dates)
    ]);
  }

  public function create(Request $r) {

    $user = auth()->user();

    $this->validate($r, [
        'name' => 'required',
        'date' => 'required'
    ]);

    $booking = new Booking(
      array(
        'name' => $r->input('name'),
        'date' => date('Y-m-d H:i:s', strtotime($r->input('date'))),
        'finished' => false
      )
    );

    $user->bookings()->save($booking);

    return redirect()->route('bookings');
  }
}
