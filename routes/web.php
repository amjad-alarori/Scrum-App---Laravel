<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductBackLogController;
use App\Http\Controllers\SprintController;
use App\Http\Controllers\ScrumTeamController;


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
    Route::get('', [PagesController::class, 'home'])->name('home');





    Route::group(['middleware' => Authenticate::class], function () {
        /** voeg hier de routes welke authorisatie nodig hebben */
        Route::post('search/user', [ScrumTeamController::class, 'searchuser'])->name('searchuser');

        Route::resource('project', 'ProjectController');
        Route::prefix('project/{project}')->group(function () {
            Route::resource('scrumTeam', 'ScrumTeamController');
            Route::resource('sprint', 'SprintController');
            Route::resource('ProductBackLog', 'ProductBackLogController');






        Route::prefix('project/{project}')->group(function () {
            /** Graag de routes van alle controllers die een modle heeft hier onder schrijven */




        });
    });

//    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//        return view('home');
//    })->name('dashboard');
});
