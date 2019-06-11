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
            $table->bigInteger('departament_id')->nullable();
            $table->bigInteger('devision_id')->nullable();
            $table->bigInteger('personal_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('group_id')->nullable();
            $table->string('name', 255)->nullable();
            $table->tinyInteger('prior')->nullable();
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
