<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutgoingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prefix', 5)->nullable();
            $table->bigInteger('reg_num')->nullable();
            $table->dateTime('reg_date')->nullable();
            $table->bigInteger('page_cnt')->nullable();
            $table->string('blank_n', 30)->nullable();
            $table->bigInteger('outdoc_vid_id')->nullable();
            $table->bigInteger('author_id')->nullable();
            $table->bigInteger('dept_id')->nullable();
            $table->bigInteger('liter_id')->nullable();
            $table->bigInteger('folder_id')->nullable();
            $table->bigInteger('signer_id')->nullable();
            $table->bigInteger('status')->nullable();
            $table->longText('description')->nullable();
            $table->string('attachment', 255)->nullable();
            $table->bigInteger('on_control')->nullable();
            $table->dateTime('sys_date')->nullable();
            $table->bigInteger('delivery_way_id')->nullable();
            $table->bigInteger('file_count')->nullable();
            $table->bigInteger('registrator_id')->nullable();
            $table->bigInteger('is_personal')->nullable();
            $table->bigInteger('is_urgent')->nullable();
            $table->bigInteger('order_id')->nullable();
            $table->dateTime('sent_time')->nullable();
            $table->bigInteger('sys_year')->nullable();
            $table->tinyInteger('lang_id')->nullable();
            $table->string('signer_fio', 255)->nullable();
            $table->string('registrator_fio', 255)->nullable();
            $table->string('autor_fio', 255)->nullable();
            $table->string('whom', 255)->nullable();
            $table->tinyInteger('type_id')->nullable();
            $table->string('teg1', 255)->nullable();
            $table->string('teg2', 255)->nullable();
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
        Schema::dropIfExists('outgoing');
    }
}
