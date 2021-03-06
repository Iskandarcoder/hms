<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doc_id')->nullable();
            $table->string('name', 255)->nullable();
            $table->smallInteger('size_kb')->nullable();
            $table->string('ext', 255)->nullable();
            $table->dateTime('create_date')->nullable();
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
        Schema::dropIfExists('internal_files');
    }
}
