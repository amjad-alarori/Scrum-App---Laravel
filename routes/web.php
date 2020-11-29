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
    Route::get('/', [PagesController::class, 'home']);
    Route::get('home', [PagesController::class, 'home']);
    Route::get('dod', [PagesController::class, 'dod']);

    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/store', 'PostController@store')->name('post.store');
    Route::get('/posts', 'PostController@index')->name('posts');






    Route::group(['middleware' => Authenticate::class], function () {
        /** voeg hier de routes welke authorisatie nodig hebben */

        /* ProjectController */
//        Route::resource('project','ProjectController');
        Route::get( 'project/{project}', [ProjectController::class, 'home']);
        Route::get('projects',[ProjectController::class,'index'])->name('projects');
        Route::get('project/new',[ProjectController::class,'create'])->name('createProject');
        Route::post('project/save',[ProjectController::class,'store'])->name('saveProject');

        /* ScrumTeamController */
        Route::get('project/{project}/scrumTeam', [ScrumTeamController::class, 'index'])->name('scrumTeam');
        Route::post('search/user',[ScrumTeamController::class,'searchuser'])->name('searchuser');
        Route::post('scrumteam/store',[ScrumTeamController::class,'store'])->name('storeTeamMember');
        Route::get('scrumteam/destroy/{scrumTeam}',[ScrumTeamController::class,'destroy'])->name('removeTeamMember');



        Route::get('sprintDashboard', [PagesController::class, 'sprintDashboard']);
        Route::get('dailyStandUp', [PagesController::class, 'dailyStandUp']);
        Route::get('sprintReview', [PagesController::class, 'sprintReview']);
        Route::get('scrumBoard', [PagesController::class, 'scrumBoard']);
        Route::get('retrospective', [PagesController::class, 'retrospective']);
        Route::get('addsprint', [PagesController::class, 'addSprint']);
        Route::get('definitionofdone', [PagesController::class, 'definitionOfDone']);
        Route::get('productbacklog', [PagesController::class, 'productBacklog']);
        Route::post('productbacklog/store', [ProductBackLogController::class, 'store'])->name('productbacklogs.store');
        Route::get('algemeenDashboard', [PagesController::class, 'algemeenDashboard'])->name('profile');
        Route::get('sprintform', [SprintController::class, 'create']);
        Route::get('saveProject', [SprintController::class, 'store']);






//
    });

//    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//        return view('home');
//    })->name('dashboard');
});
