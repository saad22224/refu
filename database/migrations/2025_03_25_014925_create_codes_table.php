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
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('desc');
            $table->string('long');
            $table->string('date');
            $table->string('company');
            $table->string('canada');
            $table->string('number');
            // $table->string('Arrival');
            $table->string('time');
            $table->string('from');
            $table->string('to');
            $table->string('duration');
            $table->string('Receiver');
            $table->string('hotel');
            $table->string('contact');
            $table->longText('companions');
            $table->string('text')->nullable();
            $table->longText('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codes');
    }
};
