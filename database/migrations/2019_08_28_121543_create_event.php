<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        DB::unprepared('CREATE EVENT realestate.e_update_schedule_penalty
        ON SCHEDULE
          EVERY 1 DAY
                STARTS CURRENT_TIMESTAMP

        DO
          call proc_update_penalty;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP EVENT IF EXISTS realestate.e_update_schedule_penalty');
    }
}
