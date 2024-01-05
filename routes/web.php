<?php
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});
Route::get('/employees', function () {
    return view('employees');
});
Route::get('/attendance_employee/{id_employee}', function () {
    return view('attendance_employee');
});
Route::get('/attendance_employee', function () {
    return view('attendance_employee'); 
})->name('attendance_employee');

Route::get('/generate_pdf',[EmployeesController::class,'generate_pdf'])->name('generate_pdf');
Route::get('/generate_excel',[EmployeesController::class,'generate_excel'])->name('generate_excel');


