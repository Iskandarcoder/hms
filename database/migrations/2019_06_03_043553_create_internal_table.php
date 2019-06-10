<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('doc_date')->nullable();
            $table->string('reg_num', 255)->nullable();
            $table->bigInteger('dept_id', 11)->nullable();
            $table->tinyInteger('doctype_id', 4)->nullable();
            $table->string('description', 255)->nullable();
            $table->bigInteger('operator_id', 11)->nullable();
            $table->dateTime('reg_date')->nullable();
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
        Schema::dropIfExists('internal');
    }
}
