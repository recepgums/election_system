<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('file_id')->default('0');
            $table->integer('user_id');
            $table->integer('election_id');
            $table->string('description')->nullable();
            $table->string('picture')->default('none_picture.jpg');
            $table->integer('votes')->default(0);
            $table->integer('confirm')->default(0);
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
        Schema::dropIfExists('candidates');
    }
}
