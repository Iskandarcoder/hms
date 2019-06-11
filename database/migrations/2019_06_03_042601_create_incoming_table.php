<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incoming', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tashkilot_id')->nullable();
            $table->bigInteger('ist_doc')->nullable();
            $table->bigInteger('doc_vid_id')->nullable();
            $table->bigInteger('type_doc')->nullable();
            $table->string('prefix', 225)->nullable();
            $table->bigInteger('in_no')->nullable();
            $table->date('date_in')->nullable();
            $table->string('out_no', 225)->nullable();
            $table->date('date_out')->nullable();
            $table->string('to_emp', 225)->nullable();
            $table->bigInteger('control')->nullable();
            $table->bigInteger('pagecnt')->nullable();
            $table->string('attach_cnt', 225)->nullable();
            $table->bigInteger('file_cnt')->nullable();
            $table->string('sender', 225)->nullable();
            $table->string('remarks', 500)->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('operator')->nullable();
            $table->dateTime('reg_date')->nullable();
            $table->bigInteger('status')->nullable();
            $table->longText('rem_pr')->nullable();
            $table->string('rem_sek', 500)->nullable();
            $table->longText('resolution')->nullable();
            $table->dateTime('changed_time')->nullable();
            $table->dateTime('ep_date')->nullable();
            $table->bigInteger('subject')->nullable();
            $table->enum('printed',['N','Y'])->nullable();
            $table->date('deadline')->nullable();
            $table->bigInteger('liter_id')->nullable();
            $table->bigInteger('journal_id')->nullable();
            $table->bigInteger('folder_id')->nullable();
            $table->bigInteger('davlat')->nullable();
            $table->tinyInteger('private')->nullable();
            $table->tinyInteger('urgent')->nullable();
            $table->longText('keywords')->nullable();
            $table->bigInteger('kw_author')->nullable();
            $table->dateTime('kw_dt')->nullable();
            $table->string('sent_perf', 500)->nullable();
            $table->string('tags', 500)->nullable();
            $table->bigInteger('orig_subj')->nullable();
            $table->string('to_whom', 500)->nullable();
            $table->tinyInteger('in_kbase')->nullable();
            $table->bigInteger('sender_doc_id')->nullable();
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
        Schema::dropIfExists('incoming');
    }
}
