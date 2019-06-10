<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeqJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seq_journals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pfx', 255)->nullable();
            $table->bigInteger('doc_year')->nullable();
            $table->bigInteger('doc_num')->nullable();
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
        Schema::dropIfExists('seq_journals');
    }
}
