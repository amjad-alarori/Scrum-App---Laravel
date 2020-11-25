<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SprintController;


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
        Route::get('projectForm',[ProjectController::class,'create'])->name('projectForm');
        Route::post('saveProject',[ProjectController::class,'store'])->name('saveProject');
        Route::get('projects',[ProjectController::class,'index'])->name('projects');
        Route::get('sprintDashboard', [PagesController::class, 'sprintDashboard']);
        Route::get('dailyStandUp', [PagesController::class, 'dailyStandUp']);
        Route::get('sprintReview', [PagesController::class, 'sprintReview']);
        Route::get('scrumBoard', [PagesController::class, 'scrumBoard']);
        Route::get('retrospective', [PagesController::class, 'retrospective']);
        Route::get( 'projectdashboard', [PagesController::class, 'projectdashboard']);
        Route::get('addsprint', [PagesController::class, 'addSprint']);
        Route::get('team', [PagesController::class, 'team']);
        Route::get('definitionofdone', [PagesController::class, 'definitionOfDone']);
        Route::get('productbacklog', [PagesController::class, 'productBacklog']);
        Route::get('algemeenDashboard', [PagesController::class, 'algemeenDashboard'])->name('profile');
        Route::get('sprintform', [SprintController::class, 'create']);
        Route::get('saveProject', [SprintController::class, 'store']);






//
    });

//    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//        return view('home');
//    })->name('dashboard');
});




