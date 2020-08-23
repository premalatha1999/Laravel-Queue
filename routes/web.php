<?php

use App\Jobs\Mailjob;
use Carbon\Carbon;
use App\Mail\Mailemail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sendmail', function () {
    Mail::to('premalathacomp1999@gmail.com')->send(new Mailemail());
    return "success";
});

Route::get('sendmailtouser', function () {
    // $job = (new Mailjob())->delay(Carbon::now()->addSeconds(5));
     $job = (new Mailjob())
                    ->delay(Carbon::now()->addMinutes(1));
    dispatch($job);
    return "success";
});