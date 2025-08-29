<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::where('user_id', Auth::id())->get();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'guests' => 'required|integer|min:1',
            'name' => 'required|string',
            'contact' => 'required|string',
        ]);

        Reservation::create([
            'user_id' => Auth::id(),
            'date' => $request->date,
            'time' => $request->time,
            'guests' => $request->guests,
            'name' => $request->name,
            'contact' => $request->contact,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Reservation created successfully!');
    }
    public function destroy($id)
{
    $reservation = Reservation::findOrFail($id);
    $reservation->delete();

    return redirect()->route('reservations.index')
                     ->with('success', 'Reservation cancelled successfully ✅');
}

}
