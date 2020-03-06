<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('students',            'StudentsController', ['except' => ['create', 'edit', 'update', 'show']]);
Route::delete('/students/{id}/trash',  'StudentsController@trash');
Route::get('/filter-students-by-age-group',  'StudentsController@filterStudentsByAgeGroup');


Route::resource('courses',            'CoursesController', ['except' => ['create', 'edit', 'update', 'show']]);
Route::delete('/courses/{id}/trash',  'CoursesController@trash');

Route::resource('enrollments',            'EnrollmentsController', ['except' => ['create', 'edit', 'update', 'show']]);
Route::delete('/enrollments/{id}/trash',  'EnrollmentsController@trash');
