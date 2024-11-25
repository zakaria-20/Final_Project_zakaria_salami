<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('form.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            // 'image'=>"required",
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            "role"=>['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            "age" =>"required",
            "weight" => "required",
            "height"=>"required",
            "gender"=>"required",
        ]);
        $weight = $request->weight;
        $height = $request->height;
        $age = $request->age;
        $gender = $request->gender;
        $activityFactor = $request->activity;
    
        // Calculate BMR
        if ($gender === 'female') {
            $bmr = 10 * $weight + 6.25 * $height - 5 * $age - 161;
        } else {
            $bmr = 10 * $weight + 6.25 * $height - 5 * $age + 5;
        }
    
        // Calculate TDEE
        $tdee = $bmr * $activityFactor;
        $image = $request->file('image'); 
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);
        $user = User::create([
            'image'=>$imageName,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'gender' => $request->gender,
            'activity'=>$request->activity,
            "calories"=>$tdee,
            'expires_at' => Carbon::now()->addDays(30),
        ]);
        // $timezone = config('app.timezone');
        // dd($timezone);
        // $nowInAppTimezone = Carbon::now()->setTimezone(config('app.timezone'));
        // dd($nowInAppTimezone->format('d-m-Y H:i:s'));
        // dd(Carbon::now()->addDays(30));
        // dd($request);
       
        $user->roles()->attach($request->role);
        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
    public function home(){
        return view("home");
    }
}
