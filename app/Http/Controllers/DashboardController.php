<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sesion;
use App\Models\TrainerRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
         $users=User::all()->where('id' ,"!=",1);
         $trainerCount = User::whereHas('roles', function ($query) {
            $query->where('name', 'trainer');
        })->count();
        $totalMember =User::whereHas('roles', function ($query) {
            $query->where('name', 'member');
        })->count();
        
        $pendingTrainerRequests = TrainerRequest::where('status', 'pending')->count(); // Count pending trainer requests
       
        $Sessions = Sesion::count(); // Count upcoming sessions
        $hommes = User::where('gender', 'homme')->count();
        $femmes = User::where('gender', 'femme')->count();
       
        // $data = [12, 19, 3, 5, 2, 3]; // Example data for the chart
        // $labels = ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'];
        return view('dashboard', compact('trainerCount', 'pendingTrainerRequests', 'totalMember', 'Sessions','users','hommes','femmes'));
    }
    // public function index1()
    // {
    //     $data = [12, 19, 3, 5, 2, 3]; // Example data for the chart
    //     $labels = ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'];

    //     return view('dashboard', compact('data', 'labels'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
