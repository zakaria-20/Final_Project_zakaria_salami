<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exercises;
use App\Models\Sesion;
use App\Models\TrainerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::whereNot("id",1)->get();
        return view("admin.users",compact("users"));
    }
    // public function indexprofil()
    // {
    //     //
    //     $exersisesdonee=Auth::user()->exercises()->wherepivot("is_done",true)->get();
    //     $exersisesfavoritee=Auth::user()->exercises()->wherepivot("is_favorite",true)->get();
    //     // dd($exersisesdonee);
    //     $user = Auth::user();
    //     return view("user.profile",compact("user","exersisesdonee","exersisesfavoritee"));
    // }
//     public function indexprofil()
// {
//     $user = Auth::user();

//     // Fetch completed and favorite exercises
//     $exersisesdonee = $user->exercises()->wherePivot("is_done", true)->get();
//     $exersisesfavoritee = $user->exercises()->wherePivot("is_favorite", true)->get();
//     if($exersisesdonee){
//         $burnedCalories = $exersisesdonee->sum('calories_burned');
//         $goalCalories = $user->calories;
//         $remainingCalories = $goalCalories - $burnedCalories;
//         $remainingCalories = $goalCalories - $burnedCalories;
//         $user->calories = $remainingCalories;
//         $user->save();
//         $progressPercentage = ($goalCalories > 0)
//         ? min(100, round(($burnedCalories / $goalCalories) * 100))
//         : 0;

//     }
   
//     // dd($goalCalories);
   
//     // $user->calories = max(0, $remainingCalories); 
   
//     // Calculate progress percentage

//     // Pass all data to the view
//     return view("user.profile", compact(
//         "user",
//         "exersisesdonee",
//         "exersisesfavoritee",
//         "burnedCalories",
//         "goalCalories",
//         "progressPercentage",
//         "remainingCalories"
//     ));
// }
public function indexprofil()
{
    $user = Auth::user();
    $usersessionjoin=$user->sessions()->where("user_id",$user->id)->count();
    $totalexercicedone = $user->exercises()->wherePivot("is_done", true)->count();
    $totalexercicefavorite = $user->exercises()->wherePivot("is_favorite", true)->count();
    $totalexrcice=$totalexercicedone + $totalexercicefavorite;
    
    // dd($usersessionjoin);
  
    $exersisesdonee = $user->exercises()->wherePivot("is_done", true)->get();
    $exersisesfavoritee = $user->exercises()->wherePivot("is_favorite", true)->get();

  
    $burnedCalories = $exersisesdonee->sum('calories_burned');
    $goalCalories = $user->calories;
    $remainingCalories = max(0, $goalCalories - $burnedCalories);
    $progressPercentage = ($goalCalories > 0) ? min(100, round(($burnedCalories / $goalCalories) * 100)) : 0;

    // Pass all data to the view
    return view("user.profile", compact(
        "user",
        "exersisesdonee",
        "exersisesfavoritee",
        "burnedCalories",
        "goalCalories",
        "progressPercentage",
        "remainingCalories",
        "usersessionjoin",
        "totalexrcice"
    ));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.users");
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
        $user = User::find($id);

     
        if (!$user) {
       
            return redirect()->route('users')->with('error', 'User not found');
        }
    
     
        $user->delete();
    
        return redirect()->route('users')->with('success', 'User deleted successfully');

    }
    public function pagehome()
    {
        $sesions=Sesion::all();
        $isPay=TrainerRequest::where("user_id",Auth::user()->id)->first();
        // dd($isPay);
         return view("user.userhome",compact('sesions',"isPay"));
    }
    public function pageprofile(){
        return view("user.profile");
    }
}
