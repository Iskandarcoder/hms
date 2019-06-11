<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doc_id')->nullable();
            $table->tinyInteger('message_type_id')->nullable();
            $table->string('nomer', 255)->nullable();
            $table->date('date_ord_d')->nullable();
            $table->time('date_ord_t')->nullable();
            $table->date('deadline_d')->nullable();
            $table->bigInteger('from_id')->nullable();
            $table->string('res_sel', 40)->nullable();
            $table->string('text_ord', 255)->nullable();
            $table->bigInteger('operator')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->bigInteger('control')->nullable();
            $table->string('deps', 255)->nullable();
            $table->tinyInteger('parrent_id')->nullable();
            $table->string('fio_from', 255)->nullable();
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
        Schema::dropIfExists('orders');
    }
}
