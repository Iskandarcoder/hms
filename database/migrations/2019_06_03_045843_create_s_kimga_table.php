<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSKimgaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_kimga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomi', 255)->nullable();
            $table->bigInteger('prior')->nullable();
            $table->bigInteger('tash_kodi')->nullable();
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
        Schema::dropIfExists('s_kimga');
    }
}
