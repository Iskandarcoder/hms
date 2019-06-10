<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalDeptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_depts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doc_id', 11)->nullable();
            $table->bigInteger('dept_id', 11)->nullable();
            $table->dateTime('reg_date')->nullable();
            $table->tinyInteger('status', 1)->nullable();
            $table->dateTime('sent_dt')->nullable();
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
        Schema::dropIfExists('internal_depts');
    }
}
