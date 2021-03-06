<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkSendingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_sending', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parrent_id')->nullable();
            $table->bigInteger('sender_id')->nullable();
            $table->bigInteger('germes_id')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->date('reg_date_d')->nullable();
            $table->tinyInteger('reg_date_t')->nullable();
            $table->string('content', 1000)->nullable();
            $table->dateTime('sys_date')->nullable();
            $table->string('fioworker', 255)->nullable();
            $table->string('status_txt', 255)->nullable();


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
        Schema::dropIfExists('work_sending');
    }
}
