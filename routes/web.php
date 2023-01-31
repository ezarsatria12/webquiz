<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
use App\Http\Controllers\AddDNDController;
use App\Http\Controllers\AddEsayController;
use App\Http\Controllers\AddPilganController;
use App\Http\Controllers\AddQuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AuthGoogleController;
use App\Http\Controllers\GuestQuizController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ModuleGuestController;

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

Route::get('/', function () {
    return view('home2');
});
Route::get('/home', function () {
    return view('home2');
})->name('home');
Route::get('/modul', function () {
    return view('modul2');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/quis', function () {
    return view('quiz');
});
Route::get('/app', function () {
    return view('app');
});
Route::get('/login', function () {
    return view('authuser.login');
});
Route::get('/addsoal', function () {
    return view('addsoal');
});

Route::get('/profile', function () {
    return view('admin.profile2');
})->name('profile');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'out']);

Route::get('/auth/google/redirect', [AuthGoogleController::class, 'redirectToProvider']);
Route::get('/auth/google/callback', [AuthGoogleController::class, 'handleProviderCallback']);

Route::get('/quizguest', [GuestQuizController::class, 'index'])->name('quizguest.index');
Route::get('/quizguest/play/{quiz}', [GuestQuizController::class, 'user']);

Route::resource('/user', UserController::class);
Route::resource('/quiz', QuizController::class);
Route::resource('/addquiz', AddQuizController::class);
Route::resource('/module', ModuleController::class);
Route::resource('/modul', ModuleGuestController::class);
Route::resource('quiz.pilgan', AddPilganController::class);
Route::resource('quiz.dragndrop', AddDNDController::class);
Route::resource('quiz.esay', AddEsayController::class);