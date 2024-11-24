<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Sesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\map;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
       
        $sessions = Sesion::all();
      
        // dd($userSessionIds, $sessions->pluck('id'));
         return view('user.calendarsession', compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $sesions = Sesion::all();

        $sesions = $sesions->map(function ($e) {
            return [
                "id" => $e->id,
                "start" => $e->start,
                "end" => $e->end,
                "owner"=> $e->user_id,
                // "color" => "#fcc102",
                "color"=>"#f9ac54",
                "passed" => false,
                "title" => $e->name,
                "description"=> $e->description,

            ];
        });

        return response()->json([
            "sesions" => $sesions
        ]);
    }

    public function showdashboard()
    {
        //
            return view("user.calendarsession");
     
    }
    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    //     $request->validate([
    //         "start" => "required",
    //         "end" => "required"
    //     ]);

    //     Calendar::create([
    //         "start" => $request->start . ":00",
    //         "end" => $request->end . ":00",
    //         "user_id" => Auth::user()->id
    //     ]);

    //     return back();
    // }

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