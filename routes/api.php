<?php

use Illuminate\Http\Request;
use App\Student;

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

 
Route::get('student', function() {
    return Student::all();
});
 
Route::get('student/{id}', function($id) {
    return Student::find($id);
});

Route::post('student', function(Request $request) {
    return Student::create($request->all());
});

Route::put('student/{id}', function(Request $request, $id) {
    $student = Student::findOrFail($id);
    $student->update($request->all());

    return $student;
});
