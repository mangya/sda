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
        Schema::create('sd_tree_plantation_drives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug', 200)->unique();
            $table->string('name', 255);
            $table->text('summary', 1000);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sd_tree_plantation_drives');
    }
};
