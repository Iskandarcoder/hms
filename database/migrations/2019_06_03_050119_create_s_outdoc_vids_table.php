<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSOutdocVidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_outdoc_vids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_rus', 255)->nullable();
            $table->string('name_uzb', 255)->nullable();
            $table->string('name_lat', 255)->nullable();
            $table->bigInteger('seq', 4)->nullable();
            $table->bigInteger('old_id', 10)->nullable();
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
        Schema::dropIfExists('s_outdoc_vids');
    }
}
