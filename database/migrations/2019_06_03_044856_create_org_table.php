<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('dflow_id', 11)->nullebale();
            $table->string('name', 255)->nullebale();
            $table->string('short_name', 255)->nullebale();
            $table->tinyInteger('type', 4)->nullebale();
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
        Schema::dropIfExists('org');
    }
}
