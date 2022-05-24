<?php

use App\Http\Controllers\HubController;
use App\Models\Hub;
use Illuminate\Support\Facades\Route;

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

Route::get('/about-us', function () {
    return view('/about-us');
});

Route::get('/class-schedule', function () {
    return view('/class-schedule');
});

Route::get('/competitive-team', function () {
    return view('/competitive-team');
});

Route::get('/acting-program', function () {
    return view('/acting-program');
});

Route::get('/class-descriptions-and-attire', function () {
    return view('/class-descriptions-and-attire');
});

Route::get('/registration', function () {
    return view('/registration');
});

Route::get('/calendar', function () {
    return view('/calendar');
});

Route::get('/recital-hub', function () {
    return view('/recital-hub');
});

Route::get('/newsletter', function () {
    return view('/newsletter');
});

Route::resource('hubs', HubController::class);


Route::get('/hubs/{hub:hubSlug}', function (Hub $hub) {
    return view('hubs.show', compact('hub'));
});
Route::post('/hubs/{hub:hubSlug}', function (Hub $hub) {
    return $hub;
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
