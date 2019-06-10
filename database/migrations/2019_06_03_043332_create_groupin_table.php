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
            $table->tinyInteger('admin', 4)->nullable();
            $table->tinyInteger('patron', 4)->nullable();
            $table->tinyInteger('registrator', 4)->nullable();
            $table->tinyInteger('controllyor', 4)->nullable();
            $table->tinyInteger('rassilka', 4)->nullable();
            $table->tinyInteger('el_pochta', 4)->nullable();
            $table->tinyInteger('sod', 4)->nullable();
            $table->tinyInteger('postman', 4)->nullable();
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
