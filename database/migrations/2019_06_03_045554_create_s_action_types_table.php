<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSActionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_action_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_rus', 255)->nullable();
            $table->string('name_uzb', 255)->nullable();
            $table->string('name_lat', 255)->nullable();
            $table->tinyInteger('access_level')->nullable();
            $table->string('url', 255)->nullable();
            $table->string('has_delivery', 2)->nullable();
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
        Schema::dropIfExists('s_action_types');
    }
}
