<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name', 255)->nullable();
            $table->string('first_name', 255)->nullable();
            $table->string('father_name', 255)->nullable();
            $table->string('phone_work', 255)->nullable();
            $table->string('phone_home', 255)->nullable();
            $table->string('phone_mobile', 255)->nullable();
            $table->date('date_beg')->nullable();
            $table->date('date_end')->nullable();
            $table->date('birth_date')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('personal');
    }
}
