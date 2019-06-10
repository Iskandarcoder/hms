<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('group_name', 255)->nullable();
            $table->tinyInteger('prior', 4)->nullable();
            $table->tinyInteger('is_valid', 4)->nullable();
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
        Schema::dropIfExists('type_category');
    }
}
