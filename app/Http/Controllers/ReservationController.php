<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Reservation;
use App\Models\Sesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use function PHPSTORM_META\map;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
       
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservations = Reservation::with('user')->get();
    
        // Debug output to logs instead of halting
        // Log::info('Reservations data:', $reservations->toArray());
    
        $reservations = $reservations->map(function ($reservation) {
            return [
                "id" => $reservation->id,
                "start" => $reservation->start,
                "end" => $reservation->end,
                "owner" => $reservation->user ? $reservation->user->name : 'Unknown',
                "color" => "#fcc102",
                "passed" => false,
                "title" => ($reservation->user->name ?? 'Unknown') . "'s Reservation",
            ];
        });
    
        return response()->json([
            "reservations" => $reservations,
        ]);
    }
    

    public function showreservation()
    {
        //
            return view("user.calendarreservation");
     
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       
        $request->validate([
            "start" => "required",
            "end" => "required"
        ]);
        
            Reservation::create([
            "start" => $request->start . ":00",
            "end" => $request->end . ":00",
            "user_id" => Auth::user()->id
        ]);
        // dd($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    // public function show(Calendar $calendar)
    // {
    //     //


    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Calendar $calendar)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Calendar $calendar)
    // {
    //     //
    //     $request->validate([
    //         "start" => "required",
    //         "end" => "required"
    //     ]);

    //     $calendar->update([
    //         "start" => $request->start ,
    //         "end" => $request->end
    //     ]);

    //     return back();
    //     // dd("jkh");
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Calendar $calendar)
    // {
    //     //

    //     $calendar->delete();
    //     return back();
    // }
}