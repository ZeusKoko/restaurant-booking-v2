<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class AdminReservationController extends Controller
{
    public function index()
    {
        // Allow only user with id=1 (admin)
        if (Auth::id() != 1) {
            abort(403, 'Unauthorized');
        }

        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        // Update status
        $reservation->status = $request->status;
        $reservation->save();

        return redirect()->back()->with('success', 'Reservation updated!');
    }
}
