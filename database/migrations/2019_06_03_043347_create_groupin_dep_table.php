<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupinDepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupin_dep', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('groupin_id', 11)->nullable();
            $table->bigInteger('depid', 11)->nullable();
            $table->tinyInteger('type', 4)->nullable();
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
        Schema::dropIfExists('groupin_dep');
    }
}
