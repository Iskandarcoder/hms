<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeparSendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depar_send', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 225)->nullable();
            $table->bigInteger('dep_id')->nullable();
            $table->bigInteger('org_id')->nullable();
            $table->tinyInteger('is_valid')->nullable();
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
        Schema::dropIfExists('depar_send');
    }
}
