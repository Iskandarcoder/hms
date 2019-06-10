<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutgoingOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('germes_id', 11)->nullable();
            $table->bigInteger('sender_id', 11)->nullable();
            $table->bigInteger('order_id', 11)->nullable();
            $table->string('varchar', 255)->nullable();
            $table->dateTime('sys_date')->nullable();
            $table->string('fiofrom', 255)->nullable();
            $table->string('fiowhom', 255)->nullable();


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
        Schema::dropIfExists('outgoing_order');
    }
}
