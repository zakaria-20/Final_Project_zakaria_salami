<?php

namespace App\Http\Controllers;

use App\Models\Exercises;
use App\Http\Controllers\Controller;
use App\Models\Sesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExercisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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
    public function store(Request $request,$sessionId)
    {
        //
        // dd($request);
        // dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'calories_burned'=>"required|integer",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
        
        $session = Sesion::findOrFail($sessionId);
        $image = $request->file('image'); 
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);
        Exercises::create([
            'name' => $request->name,
            'calories_burned' => $request->calories_burned,
            'image' =>  $imageName,
            'sesion_id'=>$sessionId 
        ]);
        // dd($request->calories_burned);
        // dd($request);
        // return back();
        return redirect()->route('sessions.show',$sessionId);
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercises $exercises)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercises $exercises)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exercises $exercises)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercises $exercises)
    {
        //
    }
    
    

    public function updateExerciseStatus(Request $request, $exerciseId)
    {
        $user = auth()->user();
        $exercise = Exercises::findOrFail($exerciseId);
    
        $pivotData = [];
        if ($request->has('done')) {
            $pivotData['is_done'] = true;
        }
        if ($request->has('favorite')) {
            $pivotData['is_favorite'] = true;
        }
    
        // Attach or update the pivot data
        $exists = $user->exercises()->wherePivot('exercises_id', $exerciseId)->exists();
    
        if ($exists) {
            $user->exercises()->updateExistingPivot($exerciseId, $pivotData);
        } else {
            $user->exercises()->attach($exerciseId, $pivotData);
        }
    
        // Reload the user data to reflect changes
        $user->load('exercises');
    
        return back();
    }
    

    // public function updateExerciseStatusdone(Request $request, $exerciseId)
    // {
    //     $user = auth()->user();
    //     // dd($user->calories);
    //     $exercise = Exercises::findOrFail($exerciseId);
        
    //     $exists = $user->exercises()->wherePivot('exercises_id', $exerciseId)->exists();
    //     // dd($exists);
    //     if ($exists) {
           
    //         $user->exercises()->updateExistingPivot($exerciseId, [
    //             'is_done' => true, 
    //         ]);
    //         $caloriesBurned = $exercise->calories_burned;
    //         $remainingCalories = $user->calories - $caloriesBurned;
    //         // dd($remainingCalories);
    //         $user->calories = $remainingCalories;
    //         $user->save();
    //     } else {
           
    //         $user->exercises()->attach($exerciseId, [
    //             'is_done' => true, 
    //         ]);
    //     }
    
    //     return back();
    // }
    public function updateExerciseStatusdone(Request $request, $exerciseId)
{
    $user = auth()->user();
    $exercise = Exercises::findOrFail($exerciseId);

    // Check if the exercise is already attached to the user
    $exists = $user->exercises()->wherePivot('exercises_id', $exerciseId)->exists();
    
    if ($exists) {
        // Update the pivot table if the exercise already exists
        $user->exercises()->updateExistingPivot($exerciseId, ['is_done' => true]);

        // Subtract the calories burned from the user's goal
        $caloriesBurned = $exercise->calories_burned;
        $remainingCalories = max(0, $user->calories - $caloriesBurned); // Ensure remaining calories don't go negative
        $user->calories = $remainingCalories;
    } else {
        // Attach the exercise to the user and mark it as done
        $user->exercises()->attach($exerciseId, ['is_done' => true]);

        // Update the user's remaining calories after doing the exercise
        $caloriesBurned = $exercise->calories_burned;
        $remainingCalories = max(0, $user->calories - $caloriesBurned); // Ensure remaining calories don't go negative
        $user->calories = $remainingCalories;
    }
    
    // Save the updated user
    $user->save();
    
    return back();
}

    public function updateExerciseStatusfavorite(Request $request, $exerciseId)
    {
        $user = auth()->user();
        $exercise = Exercises::findOrFail($exerciseId);
    
        $exists = $user->exercises()->wherePivot('exercises_id', $exerciseId)->exists();
    
        if ($exists) {
            // Update the pivot table if it exists
            $user->exercises()->updateExistingPivot($exerciseId, [
                'is_favorite' => true, // Mark as favorite
            ]);
        } else {
            // Attach the relationship with the correct status
            $user->exercises()->attach($exerciseId, [
                'is_favorite' => true, // Set to "favorite" initially
            ]);
        }
    
        return back();
    }
    
}
