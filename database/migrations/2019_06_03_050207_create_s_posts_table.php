<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_rus', 255)->nullable();
            $table->string('name_uzb', 255)->nullable();
            $table->string('name_lat', 255)->nullable();
            $table->bigInteger('seq', 11)->nullable();
            $table->string('old_id', 255)->nullable();
            $table->string('s_posts_type_id', 255)->nullable();
            $table->string('date_delete', 255)->nullable();
            $table->string('num_prikaz', 255)->nullable();
            $table->string('post_index', 255)->nullable();

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
        Schema::dropIfExists('s_posts');
    }
}
