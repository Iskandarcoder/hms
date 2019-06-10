<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSStatusOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_status_out', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_uzb', 255)->nullable();
            $table->string('name_rus', 255)->nullable();
            $table->string('keyword', 255)->nullable();
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
        Schema::dropIfExists('s_status_out');
    }
}
