<?php

use App\Http\Controllers\CourseController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/student', 'index');
    Route::post('/student', 'registerEnrollment');
    Route::get('/student/{id}', 'showCoursesByStudentId');
});

Route::controller(CourseController::class)->group(function () {
    Route::get('/course', 'index');
    Route::post('/course', 'store');
    Route::put('/course/{id}', 'update');
    Route::get('/course/{id}', 'getCourseById');
    Route::delete('/course/{id}', 'delete');
    Route::get('/trashed-courses', 'getTrashedCourses');
});
