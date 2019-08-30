<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE DEFINER=`root`@`localhost` FUNCTION `summeriseScheduleStatus`(`pContractId` integer) RETURNS int(11)
        BEGIN
        DECLARE scheduleStatus INTEGER;
            
            DECLARE countDone INTEGER;
            
            DECLARE countAll INTEGER;
            
              SELECT 
                count(*)
            INTO @countDone
            FROM install_schedules
            WHERE contractId= pContractId and status=2;
            
            SELECT 
                count(*)
            INTO @countAll
            FROM install_schedules
            WHERE contractId= pContractId;
            
            IF @countDone<@countAll THEN
                set scheduleStatus=0;
            ELSE
                set scheduleStatus=1;
            END IF;
            
              RETURN scheduleStatus;
        
        END ');


        DB::unprepared('CREATE DEFINER=`root`@`localhost` FUNCTION `getInstallmentPercent`(`pContractId` integer) RETURNS float
        BEGIN
            DECLARE scheduleStatus INTEGER;
            
            DECLARE countDone INTEGER;
            
            DECLARE countAll INTEGER;
            
          SELECT 
                count(*)
            INTO @countDone
            FROM install_schedules
            WHERE contractId= pContractId and status=2;
            
            SELECT 
                count(*)
            INTO @countAll
            FROM install_schedules
            WHERE contractId= pContractId;
            
            RETURN  round(@countDone/@countAll*100);
        END ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        DB::unprepared('DROP FUNCTION IF EXISTS summeriseScheduleStatus');
        DB::unprepared('DROP FUNCTION IF EXISTS getInstallmentPercent');
    }
}
