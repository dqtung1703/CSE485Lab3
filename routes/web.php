<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
Route::get('/', function () {
    return view('tasks\App');
});
Route::resource('tasks', TaskController::class);
