
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->string('id_attendance')->primary();
            $table->date('attendance_date');
            $table->string('day');
            $table->time('time_in');
            $table->time('time_out');
            $table->time('break_time_start');
            $table->time('break_time_end');
            $table->string('id_employee');
            $table->foreign('id_employee')
                ->references('id_employee')
                ->on('employee')
                ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
};
