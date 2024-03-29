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
        Schema::create('meal', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->json('ingredients');
            $table->text('description')->nullable();
            $table->text('image_url')->nullable();
            $table->text('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal');
    }
};
