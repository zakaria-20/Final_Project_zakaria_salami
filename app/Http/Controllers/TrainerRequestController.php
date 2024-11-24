<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\TrainerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Price;
use Stripe\Stripe;

class TrainerRequestController extends Controller
{
    //
    public function create() 
    { 
        return view('trainer-requests.create');
     } 
    //  public function index() { 
    //     $users = User::whereNot("id",1)->get();
    //     $trainerRequests = TrainerRequest::where('status', 'pending')->get();
    //     // dd($trainerRequests);
    //     return view('admin.users', compact('trainerRequests','users')); 
    // }
    public function index() { 
        $users = User::whereNot("id",1)->get();
        $trainerRequests = TrainerRequest::where('status', 'pending')->get();
        // dd($trainerRequests);
        return view('trainer.index', compact('trainerRequests','users')); 
    }
    public function store(Request $request) 
    { 
        // dd("dakhel");
        TrainerRequest::create([ 
            'user_id' => auth()->id(),
        ]); 
        return redirect()->back()->with('success', 'Your request has been submitted.'); 
    }
    public function approve(TrainerRequest $trainerRequest) 
    { $trainerRequest->update(['status' => 'approved']); 
        $trainerRole = Role::where("name","trainer")->first();
        $trainerRequest->user->roles()->detach();
        $trainerRequest->user->roles()->attach($trainerRole);
        
         return back();
        } 
    public function reject(TrainerRequest $trainerRequest) { 
        $trainerRequest->update(['status' => 'rejected']);
        return back();  
    }

    public function subscrip(){
        Stripe::setApiKey(config('stripe.sk'));
        $prices = Price::all();
        
          $checkout_session = Session::create([
            'line_items' => [[
              'price' => $prices->data[0]->id,
              'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => route('paymentSuccess'), 
            'cancel_url' => route('sessions.index'),
          ]);
          return redirect()->away($checkout_session->url);
    }
    public function paymentSuccess()
    {

        $user = Auth::user();


        $trainerRequest = TrainerRequest::where('user_id', $user->id)->first();

        if ($trainerRequest) {
            $trainerRequest->update(['pay' => 'true']);

            return redirect()->route('sessions.index')->with('success', 'Payment successful, your trainer request is now active.');
        }

        return redirect()->route('sessions.index')->with('error', 'No trainer request found for this user.');
    }
}
