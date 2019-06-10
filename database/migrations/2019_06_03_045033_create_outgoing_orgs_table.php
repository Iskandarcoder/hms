<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutgoingOrgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing_orgs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('outgoing_id', 11)->nullable();
            $table->bigInteger('org_id', 11)->nullable();
            $table->dateTime('date_create')->nullable();
            $table->string('on_control', 255)->nullable();
            $table->dateTime('deadline')->nullable();
            $table->dateTime('sent_time')->nullable();
            $table->bigInteger('status', 1)->nullable();
            $table->dateTime('recv_time')->nullable();
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
        Schema::dropIfExists('outgoing_orgs');
    }
}
