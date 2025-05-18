<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('groups', GroupController::class)->except(['edit', 'update', 'destroy']);
Route::resource('groups.students', StudentController::class)->shallow()->only(['create', 'store', 'show']);