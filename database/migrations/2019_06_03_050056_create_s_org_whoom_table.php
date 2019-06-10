<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSOrgWhoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_org_whoom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tash_id', 11)->nullable();
            $table->string('boss', 255)->nullable();
            $table->tinyInteger('prior', 4)->nullable();
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
        Schema::dropIfExists('s_org_whoom');
    }
}
