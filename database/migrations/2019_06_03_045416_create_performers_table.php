<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('recipient_id')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->bigInteger('doc_id')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->dateTime('status_dt')->nullable();
            $table->dateTime('completion_dt')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->bigInteger('parrent_order')->nullable();
            $table->dateTime('date_create')->nullable();
            $table->string('fiorecipent', 255)->nullable();

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
        Schema::dropIfExists('performers');
    }
}
