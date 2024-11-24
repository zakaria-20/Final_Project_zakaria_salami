<?php

namespace App\Http\Controllers;

use App\Models\Sesion;
use App\Http\Controllers\Controller;
use App\Models\Exercises;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Checkout\Session;
use Stripe\Price;
use Stripe\Stripe;

class SesionController extends Controller
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
    public function store(Request $request)
    {
       
      
    
             $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                // 'day' => 'string',
                'start'=>'required|nullable',
                'end'=>'required|nullable',
               'spots' => 'required|nullable|integer',
              'is_premium' => 'nullable|boolean',
              'available' => 'nullable|boolean',
            //   'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);
        // dd($request);
        $image = $request->file('image'); 
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);
        $sesion=Sesion::create([
            'trainer_id' => auth()->id(),
            'name' => $request->name,
            'description' => $request->description,
            'start' => $request->start,
            'end' => $request->end,
            'day'=>$request->day,
            'spots' => $request->spots,
            'is_premium' => $request->has('is_premium') ? 1 : 0 ,
            'available' => $request->available ?? false,
            'image' =>   $imageName ?? null, 
        ]);
       
   
        return back();
    }

    public function joinSession($sessionId)
    {
      
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please log in to join a session.');
        }
    
        $session = Sesion::findOrFail($sessionId);
    
       
        if ($session->spots <= 0) {
            return back()->with('error', 'Ce cours est plein.');
        }
    
     
        if (DB::table('sesion_users')->where('sesion_id', $sessionId)->where('user_id', Auth::id())->exists()) {
            return back()->with('error', 'Vous êtes déjà inscrit à ce cours.');
        }
    
    
        $session->users()->attach(Auth::id());
    
     
        $session->decrement('spots');
      
        return back()->with('success', 'Vous êtes inscrit avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $exercises = Exercises::where('sesion_id', $id)->get();
        $session = Sesion::findOrFail($id);
        return view("user.showsession",compact("session","exercises"));
    }
    public function subscripsession(Request $request, $sessionId)
    {
        Stripe::setApiKey(config('stripe.sk'));
        $prices = Price::all();
    
        $checkout_session = Session::create([
            'line_items' => [[
                'price' => $prices->data[0]->id,
                'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => route('paymentSucces', ['sessionId' => $sessionId]), // Correct way to pass the sessionId
            'cancel_url' => route('sessions.index'),
        ]);
    
        return redirect()->away($checkout_session->url);
    }
    

    public function paymentSucces($sessionId)
    {
        $user = Auth::user();
        $session = Sesion::findOrFail($sessionId);
    
       
        $paid = $user->sessions()->where('sesion_id', $session->id)->wherePivot('pay', true)->exists();
        // dd($user, $session, $paid); 
    
        if ($user && $session) {
            if (!$session->users()->where('user_id', $user->id)->wherePivot('pay', true)->exists()) {
                $session->users()->attach($user->id, ['pay' => true]);
            }
    
            return redirect()->route('sessions.index')->with('success', 'Payment successful! You can now join the session.');
        }
    
        return redirect()->route('sessions.index')->with('error', 'Payment failed or invalid session.');
    }
    
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sesion $sesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sesion $sesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sesion $sesion)
    {
        //
        $sesion->delete();
        return back();
    }
}
