<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
    return view('add_marksheet');
});


Route::get('/students', function () {
    return view('student_records');
});

Route::get('student-records', [StudentController::class , 'getStudentRecords'])->name('student.list');


Route::post('store',[StudentController::class , 'store']);

