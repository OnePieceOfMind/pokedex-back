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
        Schema::create('pokemon_type_registereds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pokemon_id');
            $table->unsignedBigInteger('pokemon_type_id')->nullable();
            $table->integer('type_slot')->nullable();
            $table->timestamps();

            $table->foreign('pokemon_id')
            ->references('id')
            ->on('pokemons')->onDelete('cascade');

            $table->foreign('pokemon_type_id')
            ->references('id')
            ->on('pokemon_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_type_registereds');
    }
};
