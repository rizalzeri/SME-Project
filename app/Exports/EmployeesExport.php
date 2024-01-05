<?php

namespace App\Exports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class EmployeesExport implements FromView, WithColumnWidths, WithStyles
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function view(): View
    {
        return view('excel.employees_report', [
            'data' => Attendance::join('employee', 'attendance.id_employee', '=', 'employee.id_employee')
                ->select(
                    'attendance.id_employee',
                    DB::raw("CONCAT(employee.first_name, ' ', employee.last_name) AS FullName"),
                    DB::raw("COUNT(DISTINCT CASE WHEN EXTRACT(ISODOW FROM CAST(attendance.attendance_date AS DATE)) NOT IN (6, 7) THEN attendance.attendance_date END) AS total_days"),
                    DB::raw("ROUND(SUM(EXTRACT(EPOCH FROM (attendance.time_out - attendance.time_in) / 3600) - 1), 2) AS total_working_hours")
                )
                ->groupBy('attendance.id_employee', 'employee.first_name', 'employee.last_name')
                ->orderBy('attendance.id_employee')
                ->get(),
        ]);
    }

    /**
     * @return array
     */
    public function columnWidths(): array
    {
        return [
            'A' => 11, 
            'B' => 16, 
            'C' => 17, 
            'D' => 18, 
        ];
    }
    /**
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet): array
    {
        return [
            'A1:D' . $sheet->getHighestRow() => ['alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT]],
        ];
    }
}
