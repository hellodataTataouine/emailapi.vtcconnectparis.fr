<?php

use App\Http\Controllers\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('send-email',[EmailController::class,'sendEmail']);
Route::get('/test-email', function () {
    Mail::raw('This is a test email!', function ($message) {
        $message->to('contact@hellodata.tn')
                ->subject('Test Email');
    });

    return 'Email sent!';
});
