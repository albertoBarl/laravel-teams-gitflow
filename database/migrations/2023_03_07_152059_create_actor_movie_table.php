<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_movie', function (Blueprint $table) {
            $table->id();

            // creo colonna ACTOR
            $table->unsignedBigInteger('actor_id');
            // aggiungo FOREIGN KEY
            $table->foreign('actor_id')
                ->references('id')
                ->on('actors')
                ->cascadeOnDelete();

            // creo colonna MOVIE
            $table->unsignedBigInteger('movie_id');
            // aggiungo FOREIGN KEY
            $table->foreign('movie_id')
                ->references('id')
                ->on('movies')
                ->cascadeOnDelete();

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
        Schema::dropIfExists('actor_movie');
    }
};
