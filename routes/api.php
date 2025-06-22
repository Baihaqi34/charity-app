<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/midtrans/callback', [DonationController::class, 'callback']);

// Route::get('/donation', function () {
//     return view('user.donation.index');
// })->name('s');
