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
        Schema::disableForeignKeyConstraints();

        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id')->constrained()->onDelete('cascade'); // Pastikan nama kolom di sini adalah category_id
            $table->string('name');
            $table->longText('description')->nullable();
            $table->dateTime('closed_at')->nullable();
            $table->enum('file_type', ['pdf', 'zip', 'txt', 'img']);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
