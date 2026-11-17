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
        Schema::create('category_product', function (Blueprint $table) {
            // Kolom id sebagai Primary Key (mengikuti struktur id_category)
            $table->id('id_category');
            
            // Kolom category_name dengan tipe string
            $table->string('category_name');
            
            // Kolom description dengan tipe text
            $table->text('description')->nullable();
            
            // Kolom created_at dan updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_product');
    }
};