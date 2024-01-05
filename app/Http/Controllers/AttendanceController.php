<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AttendanceController extends Controller
{
    //
    public function getDataEmployeeAttendance(){
        $data = Attendance::all();
        return response()->json($data);
    }

    public function getEmployeeWithAttendance($id_employee) {
        $data = DB::table('attendance')
                    ->join('employee', 'attendance.id_employee', '=', 'employee.id_employee')
                    ->where('employee.id_employee', $id_employee)
                    ->select('attendance.*', 'employee.*') 
                    ->get();

        return response()->json($data);
    }
}
