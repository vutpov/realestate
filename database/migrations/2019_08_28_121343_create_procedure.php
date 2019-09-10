<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_update_penalty`()
        BEGIN
                DECLARE v_finished INTEGER DEFAULT 0;
                DECLARE v_newPenalty FLOAT DEFAULT 0;
                DECLARE v_scheduleInstallId FLOAT DEFAULT 0;
         
             -- declare cursor for employee email
             DEClARE install_schedules_cursor CURSOR FOR 
             
             SELECT scheduleInstallId,DATEDIFF(now(),payDate)*0.01*amountToPay as newPenalty FROM 			
             install_schedules  WHERE status=1;
             
             DECLARE CONTINUE HANDLER 
                            FOR NOT FOUND SET v_finished = 1;
             
             OPEN install_schedules_cursor;
             
             get_schedule: LOOP
             
             FETCH install_schedules_cursor INTO v_scheduleInstallId,v_newPenalty;
             
             IF v_finished = 1 THEN 
             LEAVE get_schedule;
             END IF;
             
             
             
             IF v_newPenalty>0 THEN
                    update install_schedules set penalty=v_newPenalty WHERE scheduleInstallId=v_scheduleInstallId;
                END IF;
             
        
         
             
             END LOOP get_schedule;
             
             CLOSE install_schedules_cursor;
        
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS proc_update_penalty');
    }
}
