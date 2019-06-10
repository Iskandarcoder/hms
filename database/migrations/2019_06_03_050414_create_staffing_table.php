<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('departament_id', 11)->nullable();
            $table->bigInteger('devision_id', 11)->nullable();
            $table->bigInteger('personal_id', 11)->nullable();
            $table->bigInteger('user_id', 11)->nullable();
            $table->bigInteger('group_id', 11)->nullable();
            $table->string('name', 255)->nullable();
            $table->tinyInteger('prior', 4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffing');
    }
}
