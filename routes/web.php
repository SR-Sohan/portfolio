<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\AboutController;
use App\Http\Controllers\Clients\ContactController;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\ProjectController;
use App\Http\Controllers\Clients\ResumeController;
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

// Client Pages Routes
Route::get("/",[HomeController::class,"page"]);
Route::get("/about",[AboutController::class,"page"]);
Route::get("/contact",[ContactController::class,"page"]);
Route::get("/resume",[ResumeController::class,"page"]);
Route::get("/project",[ProjectController::class,"page"]);
Route::get("/project/{id}",[ProjectController::class,"page2"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
