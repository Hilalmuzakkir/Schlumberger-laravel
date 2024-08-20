<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

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
    return redirect('home');
});

Route::get('login', [AuthController::class, 'loginView'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);


Route::middleware('auth')->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/layanan.slb', function () {
        return view('layanan');
    });

    Route::get('/upload', [UploadController::class, 'index']);
    Route::post('upload', [UploadController::class, 'upload']);

    Route::get('/search-slb', [SearchController::class, 'index']);
    Route::delete('/delete-slb/{id}', [SearchController::class, 'delete'])->name('delete-slb');
    Route::get('/download-slb/{id}', [SearchController::class, 'download'])->name('download-slb');
});

Route::get('/welcome', function () {
    return view('welcomeslb');
});