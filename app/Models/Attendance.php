<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = 'attendance';

    protected $fillable = [
        'id_attendance',
        'attendance_date',
        'day',
        'id_employee', 
        'time_in',
        'time_out',
        'break_time_start',
        'break_time_end',
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'id_employee', 'id_employee');
    }
}
