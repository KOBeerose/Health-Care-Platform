<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    public function create(Request $request) {
        $user = auth()->user();

        $this->validate($request, [
            'name' => 'required|min:2|max:255',
            'CIN' => 'required|min:5|max:10',
            'phone_client' => 'required|max:10',
            'medicament' => '',
            'posologie' => '',
            'diagnostic' => 'required'
        ]);

        $consultation = new Consultation(
            array(
                'name' => $request->input('name'),
                'CIN' => $request->input('CIN'),
                'phone_client' => $request->input('phone_client'),
                'medicament' => $request->input('medicament'),
                'posologie' => $request->input('posologie'),
                'diagnostic' => $request->input('diagnostic'),
            )
        );

        $user->consultations()->save($consultation);

        return redirect()->route('consultations');
    }

    public function showAll() {
        $user = auth()->user();

        $consulted = $user->consultations()->get();
        $today = $consulted->where('created_at', '<', date('Y-m-d', strtotime('tomorrow')));

        $consulted_dates = $consulted->map(function($consultation) {
            return $consultation->created_at;
        });

        return view('consultations', [
            'today' => $today->reverse(),
            'consulted_dates' => json_decode($consulted_dates)
        ]);
    }
}
