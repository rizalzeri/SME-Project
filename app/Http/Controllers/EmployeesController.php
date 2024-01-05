<?php

namespace App\Http\Controllers;
use App\Exports\EmployeesExport;
use Barryvdh\DomPDF\Facade\PDF as PDF;
use Maatwebsite\Excel\Facades\Excel as Excel;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmployeesController extends Controller
{
    //
    public function getDataEmployee(){
        $data = Employees::all();
        return response()->json($data);

    }
    public function getAllDataEmployees(){
        return view('employees');
    }
    public function showAttendance($id_employee) {
        $employee = Employees::find($id_employee);
    
        if (!$employee) {
            return response()->json([
                'message' => 'Employee not found',
            ], 404);
        }
    
        return response()->json($employee);
    }
    public function generate_pdf() {
        $data = DB::table('attendance')
                    ->join('employee', 'attendance.id_employee', '=', 'employee.id_employee')
                    ->select(
                        'attendance.id_employee',
                        DB::raw("CONCAT(employee.first_name, ' ', employee.last_name) AS FullName"),
                        DB::raw("COUNT(DISTINCT CASE WHEN EXTRACT(ISODOW FROM CAST(attendance.attendance_date AS DATE)) NOT IN (6, 7) THEN attendance.attendance_date END) AS total_days"),
                        DB::raw("ROUND(SUM(EXTRACT(EPOCH FROM (time_out - time_in) / 3600) - 1), 2) AS total_working_hours")
                    )
                    ->groupBy('attendance.id_employee', 'employee.first_name', 'employee.last_name')
                    ->orderBy('attendance.id_employee')
                    ->get();
        $pdf = PDF::loadView('pdf.employees_report', ['data' => $data]);        
        return $pdf->stream('employees_report.pdf');
    }
    public function generate_excel() {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }

}
