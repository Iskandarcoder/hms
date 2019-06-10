<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalMailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_mail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('outgoing_id', 11)->nullable();
            $table->date('reg_date')->nullable();
            $table->string('reg_num', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('adresat', 255)->nullable();
            $table->tinyInteger('status', 4)->nullable();
            $table->date('sent_date')->nullable();
            $table->date('return_date')->nullable();
            $table->bigInteger('operator_id', 11)->nullable();

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
        Schema::dropIfExists('personal_mail');
    }
}
