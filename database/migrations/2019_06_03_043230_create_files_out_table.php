<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_out', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doc_id', 11)->nullable();
            $table->string('name', 500)->nullable();
            $table->smallInteger('size_kb', 6)->nullable();
            $table->string('ext', 255)->nullable();
            $table->dateTime('sys_date')->nullable();
            $table->string('fullpath', 255)->nullable();
            $table->string('idname', 255)->nullable();
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
        Schema::dropIfExists('files_out');
    }
}
