<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('weather', function (Blueprint $table) {
            $table->id();
            $table->string('celsius');
            $table->string('weather_type');
            $table->string('humidity');
            $table->string('wind_speed');
            $table->timestamps();
        });

        Schema::create('forecast', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weather_id')->constrained('weather')->onDelete('cascade');
            $table->string('morning');
            $table->string('afternoon');
            $table->string('evening');
            $table->string('night');
            $table->timestamps();
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather');
        Schema::dropIfExists('forecast');
    }
};
