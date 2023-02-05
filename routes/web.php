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
Route::get('/info', function () {
    return view('infopengembang');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/login', function () {
    return view('authuser.login');
})->middleware('guest');
Route::get('/addsoal', function () {
    return view('addsoal');
});

Route::get('/profile', function () {
    return view('admin.profile2');
})->name('profile');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate')->middleware('guest');

Route::get('/register', [LoginController::class, 'indexregister'])->middleware('guest');
Route::post('/register', [LoginController::class, 'storeregister'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'out']);

Route::get('/auth/google/redirect', [AuthGoogleController::class, 'redirectToProvider'])->middleware('guest');
Route::get('/auth/google/callback', [AuthGoogleController::class, 'handleProviderCallback'])->middleware('guest');

Route::get('/quizguest', [GuestQuizController::class, 'index'])->name('quizguest.index');
Route::get('/quizguest/play/{quiz}', [GuestQuizController::class, 'user'])->name('usersaveplay');;
Route::post('/quizguest/play/{quiz}', [GuestQuizController::class, 'usersave'])->name('usersave');
Route::get('/quizguest/play/{quiz}/student/{student}', [GuestQuizController::class, 'play'])->name('play');

Route::get('/quizguest/play/{quiz}/student/{student}/pilgan/{pilgan}', [GuestQuizController::class, 'showpilgan'])->name('showpilgan');
Route::post('/quizguest/play/{quiz}/student/{student}/pilgan/{pilgan}', [GuestQuizController::class, 'pilganvalid'])->name('pilganvalid');

Route::get('/quizguest/play/{quiz}/student/{student}/dnd/{dnd}', [GuestQuizController::class, 'showdnd'])->name('showdnd');
Route::post('/quizguest/play/{quiz}/student/{student}/dnd/{dnd}', [GuestQuizController::class, 'showdndvalid'])->name('showdndvalid');

Route::get('/quizguest/play/{quiz}/student/{student}/esay/{esay}', [GuestQuizController::class, 'showesay'])->name('showesay');
Route::post('/quizguest/play/{quiz}/student/{student}/esay/{esay}', [GuestQuizController::class, 'showesayvalid'])->name('showesayvalid');

Route::get('/quizguest/play/{quiz}/student/{student}/result', [GuestQuizController::class, 'result'])->name('result');

Route::get('/quiz/{quiz}/hasil', [GuestQuizController::class, 'showhasil'])->name('showhasil');
Route::get('/quiz/{quiz}/hasil/{student}', [GuestQuizController::class, 'showjawaban'])->name('showjawaban');


Route::resource('/user', UserController::class)->middleware('guest');
Route::resource('/quiz', QuizController::class)->middleware('auth');
Route::resource('/addquiz', AddQuizController::class);
Route::resource('/module', ModuleController::class)->middleware('auth');
Route::resource('/modul', ModuleGuestController::class);
Route::resource('quiz.pilgan', AddPilganController::class)->middleware('auth');
Route::resource('quiz.dragndrop', AddDNDController::class)->middleware('auth');
Route::resource('quiz.esay', AddEsayController::class)->middleware('auth');