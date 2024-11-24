<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\TrainerRequestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','role:admin'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(["role:admin"]);
// Route::get('/chart', [DashboardController::class, 'index1']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get("/home",[RegisteredUserController::class,"home"]);
Route::get("/users",[UserController::class,"create"])->name("users");
Route::get("/users",[UserController::class,"index"])->name("users");
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
// routes/web.php
Route::get('trainer-requests/create', [TrainerRequestController::class, 'create'])->name('trainer-requests.create');
Route::post('trainer-requests', [TrainerRequestController::class, 'store'])->name('trainer-requests.store');
Route::get('/index', [TrainerRequestController::class, 'index'])->name('index');
Route::post('trainer-requests/{trainerRequest}/approve', [TrainerRequestController::class, 'approve'])->name('trainer-requests.approve');
Route::post('trainer-requests/{trainerRequest}/reject', [TrainerRequestController::class, 'reject'])->name('trainer-requests.reject');
Route::get("/homeuser", [UserController::class, 'pagehome'])->name("sessions.index");
Route::post('sessions', [SesionController::class, 'store'])->name('sessions.store');
Route::post('/sessions/{id}/join', [SesionController::class, 'joinCourse'])->name('sessions.join');


Route::get('/sessions/{id}', [SesionController::class, 'show'])->name('sessions.show');
Route::post('/sessions/{session}/exercises', [ExercisesController::class, 'store'])->name('exercises.store');
Route::post('/exercises/{exercise}/status', [ExercisesController::class, 'updateExerciseStatus'])->name('exercises.updateStatus');
// Route::post('/exercises/{exercise}/status/done', [ExercisesController::class, 'updateExerciseStatusdone'])
//     ->name('exercises.updateStatusdone');

// Route::post('/exercises/{exercise}/status/favorite', [ExercisesController::class, 'updateExerciseStatusfavorite'])
//     ->name('exercises.updateStatusfavorite');
Route::post('/exercises/{exercise}/status/done', [ExercisesController::class, 'updateExerciseStatusdone'])->name('exercises.updateStatusdone');
Route::post('/exercises/{exercise}/status/favorite', [ExercisesController::class, 'updateExerciseStatusfavorite'])->name('exercises.updateStatusfavorite');
Route::get("cart/subscrip",[TrainerRequestController::class,"subscrip"])->name("cart.subscrip");

// Route::resource("calendar" , CalendarController::class);
Route::get('/calendar/create', [CalendarController::class ,"create"]);
Route::get('/calendar', [CalendarController::class ,"showdashboard"]);
Route::get('/calendar', [CalendarController::class, 'index']);

Route::put("/calendar/update/{calendar}" , [CalendarController::class , "update"])->name("updateCalendar");
// Route::delete("/calendar/delete/{calendar}" , [CalendarController::class , "destroy"])->name("deleteCalendar");
Route::post('/sessions/join/{id}', [SesionController::class, 'joinSession'])->name('sessions.join');
Route::get("cart/subscrip",[TrainerRequestController::class,"subscrip"])->name("cart.subscrip");
Route::get("/paymentSuccess",[TrainerRequestController::class,"paymentSuccess"])->name("paymentSuccess");
Route::delete("/calendar/delete/{sesion}" , [SesionController::class , "destroy"])->name("session.delete");
// Route::get("session/subscrip/{sessionId}",[SesionController::class,"subscripsession"])->name("session.subscrip");
// Route::get("/paymentSucces/{sessionId}",[SesionController::class,"paymentSucces"])->name("paymentSucces");
Route::post('/sessions/subscribe/{sessionId}', [SesionController::class, 'subscripsession'])->name('session.subscrip');
Route::get('/sessions/payment-success/{sessionId}', [SesionController::class, 'paymentSucces'])->name('paymentSucces');
//reservations
Route::get('/reservations', [ReservationController::class, 'showreservation'])->name('reservations');
Route::get('/calendar/createe', [ReservationController::class, 'create']);

Route::Post("/store/reservations", [ReservationController::class,'store'])->name('store.reservation');
Route::get("/profile/user",[UserController::class, 'pageprofile']);
Route::get("/profile/user",[UserController::class, 'indexprofil']);

require __DIR__.'/auth.php';
