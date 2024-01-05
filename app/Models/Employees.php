<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employee';

    protected $fillable = [
        'id_employee',
        'first_name',
        'birth_date',
        'gender', 
        'education',
        'id_number',
        'last_name',
        'address',
        'marital_status',
    ];
    // Mengatur primary key
    
    protected $primaryKey = 'id_employee';

    // Menonaktifkan incrementing jika id_employee bukan integer atau tidak auto-increment
    public $incrementing = false;
}
