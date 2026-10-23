<?php

use App\Http\Controllers\LeadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('throttle:20,1')->group(function () {
    Route::post('/get-customer-details', [LeadController::class, 'getCustomerDetails'])->name('elevenlabs.leads.next');
    Route::post('/update-customer-call-result', [LeadController::class, 'updateCustomerCallResult'])->name('elevenlabs.leads.call-result');
});
