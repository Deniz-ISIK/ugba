<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




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

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/gallery',[HomeController::class,'gallery']);
Route::get('/project',[HomeController::class,'project']);
Route::get('/service',[HomeController::class,'service']);
Route::get('/news',[HomeController::class,'news']);
Route::get('/activity',[HomeController::class,'activity']);
Route::get('/social',[HomeController::class,'socials']);
Route::get('/economy',[HomeController::class,'economy']);
Route::get('/goals',[HomeController::class,'goals']);
Route::get('/events',[HomeController::class,'events']);
Route::get('/aims',[HomeController::class,'aims']);

Route::get('/projectAnnouncements',[HomeController::class,'projectAnnouncements']);
Route::get('/projectDetails',[HomeController::class,'projectDetails']);


//Route::get('/new-details', function () {
  //  return view('frontend.new-details');});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('frontend.index');
})->name('dashboard');
