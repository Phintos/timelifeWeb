<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_calendar');
            $table->string('type');
            $table->string('title');
            $table->text('body');
            $table->string('mood');
            $table->string('mediaUrl');
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
        Schema::dropIfExists('media');
    }
}
