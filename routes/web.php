<?php
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getAllProjects', [ProjectController::class, 'getAllProjects']);
Route::get('/insertNewProject', [ProjectController::class, 'insertProject']);
Route::get('/updateProject', [ProjectController::class, 'updateProject']);
Route::get('/updateHardProject', [ProjectController::class, 'updateHardProject']);
Route::get('/deleteProject', [ProjectController::class, 'deleteProject']);
Route::get('/delete_chalen_Project', [ProjectController::class, 'delete_chalen_Project']);




