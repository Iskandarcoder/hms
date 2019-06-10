<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doc_id', 11)->nullable();
            $table->bigInteger('dept_id', 11)->nullable();
            $table->string('order_text', 255)->nullable();
            $table->dateTime('create_date')->nullable();
            $table->tinyInteger('is_read', 4)->nullable();
            $table->bigInteger('author_id', 11)->nullable();
            $table->string('author_fio', 255)->nullable();
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
        Schema::dropIfExists('internal_orders');
    }
}
