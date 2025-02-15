<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('game_records', function (Blueprint $table) {
            $table->id(); // Automatyczny ID
            $table->string('login'); // Login gracza
            $table->string('game_type'); // Typ gry
            $table->string('value'); // Wartość (np. wynik)
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('game_records');
    }
};
