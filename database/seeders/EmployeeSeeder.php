<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employee')->insert([
            [
                'id_employee' => '001',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'birth_date' => '2001-12-31',
                'gender' => 'Male',
                'education' => 'S1-Informatika',
                'id_number' => '3328093112020002',
                'address' => 'Jl. Raya Kampus Udayana',
                'marital_status' => 'Single'
            ],
            [
                'id_employee' => '002',
                'first_name' => 'Jane',
                'last_name' => 'Martin',
                'birth_date' => '2001-11-24',
                'gender' => 'Male',
                'education' => 'S1-Geologi',
                'id_number' => '3321023415020002',
                'address' => 'Jl Jenderal Sudirman',
                'marital_status' => 'Married'
            ],
            [
                'id_employee' => '003',
                'first_name' => 'Michael',
                'last_name' => 'Benjamin',
                'birth_date' => '2002-11-11',
                'gender' => 'Male',
                'education' => 'S1-Matematika',
                'id_number' => '3318491142023002',
                'address' => 'Jl Gatot Subroto',
                'marital_status' => 'Divorced'
            ],
            [
                'id_employee' => '004',
                'first_name' => 'Jessica',
                'last_name' => 'Rose',
                'birth_date' => '2001-04-03',
                'gender' => 'Female',
                'education' => 'S1-Informatika',
                'id_number' => '3318394112010004',
                'address' => 'Jl Imam Bonjol No 4',
                'marital_status' => 'Single'
            ],
            [
                'id_employee' => '005',
                'first_name' => 'Kate',
                'last_name' => 'Sabrina',
                'birth_date' => '2002-01-03',
                'gender' => 'Female',
                'education' => 'S1-Kimia',
                'id_number' => '3321321415140002',
                'address' => 'Jl Raden Ajeng Kartini',
                'marital_status' => 'Single'
            ],
            [
                'id_employee' => '006',
                'first_name' => 'Roberto',
                'last_name' => 'Jorgensen',
                'birth_date' => '2002-08-22',
                'gender' => 'Male',
                'education' => 'S1-Teknik Perkapalan',
                'id_number' => '3318323142010007',
                'address' => 'Jl Kapiten Pattimura',
                'marital_status' => 'Married'
            ],
        ]);
    }
}
