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
        Schema::create('room_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',)->nullable();
            $table->integer('price')->default(0);
            $table->string('room_size')->nullable();
            $table->integer('capacity')->default(0);
            $table->enum('bed_setup', ['single', 'double', 'twin', 'suite']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_categories');
    }
};
