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
        Schema::create('sd_trees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('slug', 200)->unique();
            $table->string('scientific_name')->nullable();
            $table->longText('info')->nullable();
            $table->string('image', 1000)->nullable();
            $table->boolean('is_active')->default('0');
            $table->string('approved_by')->nullable();
            $table->boolean('is_approved')->default('0');
            $table->string('owner');
            $table->string('last_updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sd_trees');
    }
};
