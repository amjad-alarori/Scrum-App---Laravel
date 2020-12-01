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


    /**
     * Onderstaande met Trisjean bespreken.
     */
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/store', 'PostController@store')->name('post.store');
    Route::get('/posts', 'PostController@index')->name('posts');
    Route::get('dod', [PagesController::class, 'dod']);

    Route::get('/post/show/{id}', 'PostController@show')->name('post.show');
    Route::delete('delete/{id}', 'UserController@deletePost')->name('posts.delete');





    Route::group(['middleware' => Authenticate::class], function () {
        /** voeg hier de routes welke authorisatie nodig hebben */
        Route::post('search/user', [ScrumTeamController::class, 'searchuser'])->name('searchuser');


        Route::resource('project', 'ProjectController');
        Route::prefix('project/{project}')->group(function () {
            Route::resource('scrumTeam', 'ScrumTeamController');
            Route::resource('sprint', 'SprintController');
            Route::resource('ProductBackLog', 'ProductBackLogController');


            Route::get('sprintDashboard/{sprint}', [PagesController::class, 'sprintDashboard']);
            Route::get('dailyStandUp', [PagesController::class, 'dailyStandUp']);
            Route::get('sprintReview', [PagesController::class, 'sprintReview']);
            Route::get('scrumBoard', [PagesController::class, 'scrumBoard']);
            Route::get('retrospective', [PagesController::class, 'retrospective']);
            Route::get('project/{project}/addsprint', [PagesController::class, 'addSprint']);
            Route::get('definitionofdone', [PagesController::class, 'definitionOfDone']);
            Route::get('productbacklog', [PagesController::class, 'productBacklog']);
            Route::get('algemeen', [PagesController::class, 'algemeenDashboard']);
            Route::post('productbacklog/store', [ProductBackLogController::class, 'store'])->name('productbacklogs.store');
            Route::get('sprintform', [SprintController::class, 'create']);
            Route::get('saveProject', [SprintController::class, 'store']);

//    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//        return view('home');
//    })->name('dashboard');
