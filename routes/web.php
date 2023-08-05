<?php

use App\Http\Controllers\Clients\AboutController;
use App\Http\Controllers\Clients\ContactController;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\ProjectController;
use App\Http\Controllers\Clients\ResumeController;
use Illuminate\Support\Facades\Route;


// Client Pages Routes
Route::get("/",[HomeController::class,"page"]);
Route::get("/about",[AboutController::class,"page"]);
Route::get("/contact",[ContactController::class,"page"]);
Route::get("/resume",[ResumeController::class,"page"]);
Route::get("/project",[ProjectController::class,"page"]);
Route::get("/project/{id}",[ProjectController::class,"page2"]);

