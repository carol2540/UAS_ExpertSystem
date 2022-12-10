<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertaintyFactor;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SolutionController;
use Spatie\LaravelIgnition\FlareMiddleware\AddJobs;

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
    return view('welcome');
});

Route::get('/diagnose', [CertaintyFactor::class, 'show']);
Route::post('/result', [ResultController::class, 'store'])->name('cf.postmethod');

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'verifyLogin'])->name('auth.verify');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/about', function(){
    return view('user.about');
});

Route::get ('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/data/gejala', [AdminController::class, "dataGejala"])->name("data.gejala");

Route::get('/solution/{datakerusakan:id}', [SolutionController::class,"showArticle"] );

Route::get('/admin/data/kerusakan', [AdminController::class, "dataKerusakan"])->name("data.kerusakan");