<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function search(Request $r) {

      $doctors = User::search($r->query('s'))->get();

      return view('search', array(
        'doctors' => $doctors
      ));

    }
}
