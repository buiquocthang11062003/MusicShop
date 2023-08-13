<?php


use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// use App\Http\Controllers\AuthControllerr;
Route::get('/', function () {
    return view('home');
});

Route::get('/HomePage', function () {
    return view('home1');
});

Route::get('/Cart', function () {
    return view('cart');
});

Route::get('/All-Product', function () {
    return view('allprd');
});



Route::get('/Signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/Signup', [AuthController::class, 'signupPost'])->name('signup.post');
Route::get('/Login', [AuthController::class, 'login'])->name('login');
Route::post('/Login', [AuthController::class, 'loginPost'])->name('login');






