<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\FactSkillController;
 
// for frontend
use App\Http\Controllers\Frontend\FrontController;



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

// -------------------------
// -------------------------

//     FRONTEND ROUTES

// -------------------------
// -------------------------

Route::get('/',[FrontController::class,'home']);


// Route::get('/', function () {
//     return view('welcome');
// });



// -------------------------
// -------------------------

//     BACKEND ROUTES

// -------------------------
// -------------------------
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Routes for HOME
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::POST('/storeHome',[HomeController::class,'storeHome'])->name('storeHome');
Route::get('/showHome',[HomeController::class,'showHome']);
Route::get('/deleteHome/{id}',[HomeController::class,'deleteHome']);
Route::get('/editteHome/{id}',[HomeController::class,'editteHome']);
Route::POST('/update/{id}',[HomeController::class,'update'])->name('update');

//Routes for ABOUT

    Route::get('/add',[AboutController::class,'add'])->name('add');
    Route::get('/manage',[AboutController::class,'view'])->name('vendor.manage');
    Route::post('/store',[AboutController::class,'store'])->name('store');
    Route::get('/showAbout',[AboutController::class,'showAbout']);
    Route::get('/destroy/{id}',[AboutController::class,'destroy']);
    Route::get('/editAbout/{id}',[AboutController::class,'editAbout']);
    //Route::get('/change/{id}',[AboutController::class,'change']);
    Route::post('/aboutUpdate/{id}',[AboutController::class,'aboutUpdate']);


    //Routes for Fact and Skill

    Route::get('/Factadd',[FactSkillController::class,'add'])->name('Factadd');
    Route::POST('/Factstore',[FactSkillController::class,'store'])->name('Factstore');
    Route::get('/show',[FactSkillController::class,'show'])->name('show');

