<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->nullable();
            $table->tinyInteger('admin')->nullable();
            $table->tinyInteger('patron')->nullable();
            $table->tinyInteger('registrator')->nullable();
            $table->tinyInteger('controllyor')->nullable();
            $table->tinyInteger('rassilka')->nullable();
            $table->tinyInteger('el_pochta')->nullable();
            $table->tinyInteger('sod')->nullable();
            $table->tinyInteger('postman')->nullable();
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
        Schema::dropIfExists('groupin');
    }
}
