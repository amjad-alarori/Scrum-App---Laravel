<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ScrumTeamController;
//use App\Http\Controllers\DailyStandUpController;

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
            Route::resource('ProductBackLog', 'ProductBacklogController');
            Route::resource('defofdone', 'DefOfDoneController');
         });


        Route::prefix('project/{project}/sprint/{sprint}')->group(function () {

            Route::resource('retrospective', 'RetrospectiveController');
            Route::resource('review', 'ReviewController');
            Route::resource('dailyStandUp', 'DailyStandUpController');
            Route::resource('sprintBacklog', 'SprintBacklogController');
            //Route::resource('sprintDashboard', 'PagesController');

            //tijdelijke routes om snelle toegang te krijgen tot view
            Route::get('sprintDashboard', [PagesController::class, 'sprintDashboard'])->name('sprintDashboard');
            //Route::get('dailyStandUp', [PagesController::class, 'dailyStandUp'])->name('dailyStandUp');
            Route::get('dailyStandUpForm', [DailyStandUpController::class, 'create'])->name('dailyStandUpForm');
            //Route::get('dailyStandUp', [DailyStandUpController::class, 'dailyStandUp']);
        });
    });
});
//    Route::middleware(['auth:sanctum', 'verified'])->get('/project', [ProjectController::class,'index'])->name('dashboard');
