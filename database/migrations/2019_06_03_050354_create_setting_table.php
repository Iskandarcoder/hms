<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('orgid', 11)->nullable();
            $table->string('orgname', 255)->nullable();
            $table->string('orgshortname', 255)->nullable();
            $table->string('adminuser', 255)->nullable();
            $table->string('adminpass', 255)->nullable();
            $table->tinyInteger('typeorganization', 4)->nullable();

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
        Schema::dropIfExists('setting');
    }
}
