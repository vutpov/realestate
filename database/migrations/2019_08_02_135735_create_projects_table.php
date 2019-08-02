<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('projectId');
            $table->String('project', 30);
            $table->timestamps();

            $table->unsignedSmallInteger('staffId');
            $table->unsignedSmallInteger('partnerId');

            $table->foreign('staffId')->references('staffId')->on('staffs');
            $table->foreign('partnerId')->references('partnerId')->on('partners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
