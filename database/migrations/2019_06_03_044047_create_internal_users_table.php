<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doc_id')->nullable();
            $table->bigInteger('staffing_id')->nullable();
            $table->string('staffing_fio', 255)->nullable();
            $table->dateTime('reg_date')->nullable();
            $table->dateTime('read_date')->nullable();

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
        Schema::dropIfExists('internal_users');
    }
}
