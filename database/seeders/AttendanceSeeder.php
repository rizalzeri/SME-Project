<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendance')->insert([
            [
                'id_attendance' => '001',
                'attendance_date' => '2024-01-04',
                'day' => 'Thursday',
                'time_in' => '07:58',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            [
                'id_attendance' => '002',
                'attendance_date' => '2024-01-05',
                'day' => 'Friday',
                'time_in' => '07:52',
                'time_out' => '17:10',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            [
                'id_attendance' => '003',
                'attendance_date' => '2024-01-08',
                'day' => 'Monday',
                'time_in' => '07:54',
                'time_out' => '17:22',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            [
                'id_attendance' => '004',
                'attendance_date' => '2024-01-09',
                'day' => 'Tuesday',
                'time_in' => '07:48',
                'time_out' => '17:32',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            [
                'id_attendance' => '005',
                'attendance_date' => '2024-01-10',
                'day' => 'Wednesday',
                'time_in' => '08:18',
                'time_out' => '17:02',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            [
                'id_attendance' => '006',
                'attendance_date' => '2024-01-11',
                'day' => 'Thursday',
                'time_in' => '07:54',
                'time_out' => '18:00',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            [
                'id_attendance' => '007',
                'attendance_date' => '2024-01-12',
                'day' => 'Friday',
                'time_in' => '07:44',
                'time_out' => '17:16',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            [
                'id_attendance' => '008',
                'attendance_date' => '2024-01-15',
                'day' => 'Monday',
                'time_in' => '07:59',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            [
                'id_attendance' => '009',
                'attendance_date' => '2024-01-16',
                'day' => 'Tuesday',
                'time_in' => '08:28',
                'time_out' => '17:39',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            [
                'id_attendance' => '010',
                'attendance_date' => '2024-01-17',
                'day' => 'Wednesday',
                'time_in' => '07:48',
                'time_out' => '17:01',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '001',
            ],
            
            [
                'id_attendance' => '011',
                'attendance_date' => '2024-01-04',
                'day' => 'Thursday',
                'time_in' => '07:54',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],
            [
                'id_attendance' => '012',
                'attendance_date' => '2024-01-05',
                'day' => 'Friday',
                'time_in' => '07:52',
                'time_out' => '17:10',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],
            [
                'id_attendance' => '013',
                'attendance_date' => '2024-01-08',
                'day' => 'Monday',
                'time_in' => '07:55',
                'time_out' => '17:32',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],
            [
                'id_attendance' => '014',
                'attendance_date' => '2024-01-09',
                'day' => 'Tuesday',
                'time_in' => '07:59',
                'time_out' => '17:19',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],
            [
                'id_attendance' => '015',
                'attendance_date' => '2024-01-10',
                'day' => 'Wednesday',
                'time_in' => '08:13',
                'time_out' => '17:02',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],
            [
                'id_attendance' => '016',
                'attendance_date' => '2024-01-11',
                'day' => 'Thursday',
                'time_in' => '07:52',
                'time_out' => '18:10',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],
            [
                'id_attendance' => '017',
                'attendance_date' => '2024-01-12',
                'day' => 'Friday',
                'time_in' => '07:34',
                'time_out' => '17:06',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],
            [
                'id_attendance' => '018',
                'attendance_date' => '2024-01-15',
                'day' => 'Monday',
                'time_in' => '07:52',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],
            [
                'id_attendance' => '019',
                'attendance_date' => '2024-01-16',
                'day' => 'Tuesday',
                'time_in' => '08:18',
                'time_out' => '17:19',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],
            [
                'id_attendance' => '020',
                'attendance_date' => '2024-01-17',
                'day' => 'Wednesday',
                'time_in' => '07:38',
                'time_out' => '17:21',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '002',
            ],

            [
                'id_attendance' => '021',
                'attendance_date' => '2024-01-04',
                'day' => 'Thursday',
                'time_in' => '07:34',
                'time_out' => '17:02',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],
            [
                'id_attendance' => '022',
                'attendance_date' => '2024-01-05',
                'day' => 'Friday',
                'time_in' => '07:54',
                'time_out' => '17:11',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],
            [
                'id_attendance' => '023',
                'attendance_date' => '2024-01-08',
                'day' => 'Monday',
                'time_in' => '07:51',
                'time_out' => '17:22',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],
            [
                'id_attendance' => '024',
                'attendance_date' => '2024-01-09',
                'day' => 'Tuesday',
                'time_in' => '07:51',
                'time_out' => '17:10',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],
            [
                'id_attendance' => '025',
                'attendance_date' => '2024-01-10',
                'day' => 'Wednesday',
                'time_in' => '08:10',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],
            [
                'id_attendance' => '026',
                'attendance_date' => '2024-01-11',
                'day' => 'Thursday',
                'time_in' => '07:51',
                'time_out' => '18:10',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],
            [
                'id_attendance' => '027',
                'attendance_date' => '2024-01-12',
                'day' => 'Friday',
                'time_in' => '07:41',
                'time_out' => '17:16',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],
            [
                'id_attendance' => '028',
                'attendance_date' => '2024-01-15',
                'day' => 'Monday',
                'time_in' => '07:53',
                'time_out' => '17:11',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],
            [
                'id_attendance' => '029',
                'attendance_date' => '2024-01-16',
                'day' => 'Tuesday',
                'time_in' => '08:38',
                'time_out' => '17:11',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],
            [
                'id_attendance' => '030',
                'attendance_date' => '2024-01-17',
                'day' => 'Wednesday',
                'time_in' => '07:58',
                'time_out' => '17:11',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '003',
            ],

            [
                'id_attendance' => '031',
                'attendance_date' => '2024-01-04',
                'day' => 'Thursday',
                'time_in' => '07:42',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],
            [
                'id_attendance' => '032',
                'attendance_date' => '2024-01-05',
                'day' => 'Friday',
                'time_in' => '07:52',
                'time_out' => '17:21',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],
            [
                'id_attendance' => '033',
                'attendance_date' => '2024-01-08',
                'day' => 'Monday',
                'time_in' => '07:45',
                'time_out' => '17:22',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],
            [
                'id_attendance' => '034',
                'attendance_date' => '2024-01-09',
                'day' => 'Tuesday',
                'time_in' => '07:42',
                'time_out' => '17:10',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],
            [
                'id_attendance' => '035',
                'attendance_date' => '2024-01-10',
                'day' => 'Wednesday',
                'time_in' => '08:11',
                'time_out' => '17:15',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],
            [
                'id_attendance' => '036',
                'attendance_date' => '2024-01-11',
                'day' => 'Thursday',
                'time_in' => '07:53',
                'time_out' => '18:55',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],
            [
                'id_attendance' => '037',
                'attendance_date' => '2024-01-12',
                'day' => 'Friday',
                'time_in' => '07:51',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],
            [
                'id_attendance' => '038',
                'attendance_date' => '2024-01-15',
                'day' => 'Monday',
                'time_in' => '07:54',
                'time_out' => '17:11',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],
            [
                'id_attendance' => '039',
                'attendance_date' => '2024-01-16',
                'day' => 'Tuesday',
                'time_in' => '08:18',
                'time_out' => '17:21',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],
            [
                'id_attendance' => '040',
                'attendance_date' => '2024-01-17',
                'day' => 'Wednesday',
                'time_in' => '07:52',
                'time_out' => '17:01',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '004',
            ],

            [
                'id_attendance' => '041',
                'attendance_date' => '2024-01-04',
                'day' => 'Thursday',
                'time_in' => '07:44',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],
            [
                'id_attendance' => '042',
                'attendance_date' => '2024-01-05',
                'day' => 'Friday',
                'time_in' => '07:54',
                'time_out' => '17:11',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],
            [
                'id_attendance' => '043',
                'attendance_date' => '2024-01-08',
                'day' => 'Monday',
                'time_in' => '07:54',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],
            [
                'id_attendance' => '044',
                'attendance_date' => '2024-01-09',
                'day' => 'Tuesday',
                'time_in' => '07:56',
                'time_out' => '17:15',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],
            [
                'id_attendance' => '045',
                'attendance_date' => '2024-01-10',
                'day' => 'Wednesday',
                'time_in' => '08:11',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],
            [
                'id_attendance' => '046',
                'attendance_date' => '2024-01-11',
                'day' => 'Thursday',
                'time_in' => '08:31',
                'time_out' => '18:10',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],
            [
                'id_attendance' => '047',
                'attendance_date' => '2024-01-12',
                'day' => 'Friday',
                'time_in' => '07:41',
                'time_out' => '17:24',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],
            [
                'id_attendance' => '048',
                'attendance_date' => '2024-01-15',
                'day' => 'Monday',
                'time_in' => '07:56',
                'time_out' => '17:11',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],
            [
                'id_attendance' => '049',
                'attendance_date' => '2024-01-16',
                'day' => 'Tuesday',
                'time_in' => '08:38',
                'time_out' => '17:15',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],
            [
                'id_attendance' => '050',
                'attendance_date' => '2024-01-17',
                'day' => 'Wednesday',
                'time_in' => '07:54',
                'time_out' => '17:51',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '005',
            ],

            [
                'id_attendance' => '051',
                'attendance_date' => '2024-01-04',
                'day' => 'Thursday',
                'time_in' => '07:46',
                'time_out' => '17:16',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],
            [
                'id_attendance' => '052',
                'attendance_date' => '2024-01-05',
                'day' => 'Friday',
                'time_in' => '07:35',
                'time_out' => '17:31',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],
            [
                'id_attendance' => '053',
                'attendance_date' => '2024-01-08',
                'day' => 'Monday',
                'time_in' => '07:53',
                'time_out' => '17:16',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],
            [
                'id_attendance' => '054',
                'attendance_date' => '2024-01-09',
                'day' => 'Tuesday',
                'time_in' => '07:26',
                'time_out' => '17:15',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],
            [
                'id_attendance' => '055',
                'attendance_date' => '2024-01-10',
                'day' => 'Wednesday',
                'time_in' => '08:15',
                'time_out' => '17:32',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],
            [
                'id_attendance' => '056',
                'attendance_date' => '2024-01-11',
                'day' => 'Thursday',
                'time_in' => '08:21',
                'time_out' => '18:30',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],
            [
                'id_attendance' => '057',
                'attendance_date' => '2024-01-12',
                'day' => 'Friday',
                'time_in' => '07:46',
                'time_out' => '17:12',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],
            [
                'id_attendance' => '058',
                'attendance_date' => '2024-01-15',
                'day' => 'Monday',
                'time_in' => '07:56',
                'time_out' => '17:13',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],
            [
                'id_attendance' => '059',
                'attendance_date' => '2024-01-16',
                'day' => 'Tuesday',
                'time_in' => '08:18',
                'time_out' => '17:55',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],
            [
                'id_attendance' => '060',
                'attendance_date' => '2024-01-17',
                'day' => 'Wednesday',
                'time_in' => '07:46',
                'time_out' => '17:53',
                'break_time_start' => '12:00',
                'break_time_end' => '13:00',
                'id_employee' => '006',
            ],

        ]);
    }
}