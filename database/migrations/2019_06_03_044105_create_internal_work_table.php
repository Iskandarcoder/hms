<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_work', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('reg_date', 11)->nullable();
            $table->bigInteger('doc_id', 11)->nullable();
            $table->bigInteger('order_id', 11)->nullable();
            $table->bigInteger('perform_id', 11)->   nullable();
            $table->bigInteger('author_id', 11)->nullable();
            $table->bigInteger('dept_id', 11)->nullable();
            $table->string('content', 255)->nullable();
            $table->timestamps('sysdate')->nullable();
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
        Schema::dropIfExists('internal_work');
    }
}
