<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalPerformersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_performers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('reg_date')->nullable();
            $table->bigInteger('doc_id', 11)->nullable();
            $table->bigInteger('order_id', 11)->nullable();
            $table->bigInteger('recipient_id', 11)->nullable();
            $table->smallInteger('status', 6)->nullable();
            $table->dateTime('status_date')->nullable();
            $table->bigInteger('parent_id', 11)->nullable();
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
        Schema::dropIfExists('internal_performers');
    }
}
