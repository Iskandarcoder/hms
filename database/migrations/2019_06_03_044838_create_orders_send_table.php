<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersSendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_send', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('parrent_id', 11)->nullable();
            $table->bigInteger('sender_id', 11)->nullable();
            $table->bigInteger('germes_id', 11)->nullable();
            $table->string('oreder_txt', 255)->nullable();
            $table->dateTime('sys_date')->nullable();
            $table->string('fio_from', 255)->nullable();
            $table->string('fio_whom', 255)->nullable();
            $table->tinyInteger('status_ord', 4)->nullable();

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
        Schema::dropIfExists('orders_send');
    }
}
