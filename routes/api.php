<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeesController;
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
Route::get('data_employees',[EmployeesController::class,'getDataEmployee']);
Route::get('data_employees/{id_employee}', [EmployeesController::class,'showAttendance']);
Route::get('data_employee_attendance/{id_employee}',[AttendanceController::class,'getEmployeeWithAttendance']);