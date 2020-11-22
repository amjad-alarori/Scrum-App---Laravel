<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::group(['middleware' => 'web'], function () {
    /** voeg hier de routes welke zonder authorisatie te bereiken is */
    Route::get('/', [PagesController::class, 'home']);
    Route::get('home', [PagesController::class, 'home']);

/** tijdelijk zonder auth totdat ik de DB met tabellen heb aangemaakt */
    Route::get('sprintDashboard', [PagesController::class, 'sprintDashboard']);
    Route::get('dailyStandUp', [PagesController::class, 'dailyStandUp']);
    Route::get('sprintReview', [PagesController::class, 'sprintReview']);
    Route::get('scrumBoard', [PagesController::class, 'scrumBoard']);
    Route::get('retrospective', [PagesController::class, 'retrospective']);


    Route::group(['middleware' => Authenticate::class], function () {
        /** voeg hier de routes welke authorisatie nodig hebben */










//
    });


    Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
        return view('home');
    })->name('dashboard');
});




