<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [ListingController::class,'index']);




Route::group(['middleware'=>'auth'],function(){

        //Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');;
    Route::resource('listings', ListingController::class)->except(['index']);

});

require __DIR__.'/auth.php';

//Route::resource('dashboard', DashboardController::class);
