<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
* Public API routes
*/
Route::post('/auth/register', [AuthController::class, 'register']);

Route::post('/auth/login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    /*
    * Create routes from Controllers/StudentController.php
    * Auth API routes
    */

    // Create a route to get all students
    Route::get('/students', [StudentController::class, 'getStudents']);

    // Create a route to get a student
    Route::get('/students/{id}', [StudentController::class, 'getStudent']);

    // Create a route to create a student
    Route::post('/students', [StudentController::class, 'createStudent']);

    // Create a route to update a student
    Route::put('/students/{id}', [StudentController::class, 'updateStudent']);

    // Create a route to delete a student
    Route::delete('/students/{id}', [StudentController::class, 'deleteStudent']);

    // Logout
    Route::post('/auth/logout', [AuthController::class, 'logout']);

    // Get current user
    Route::get('/auth/user', [AuthController::class, 'user']);
});