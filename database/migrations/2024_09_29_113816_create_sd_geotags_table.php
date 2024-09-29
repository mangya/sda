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
        Schema::create('sd_geotags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tree_id');
            $table->string('slug', 200)->unique();
            $table->string('tree_longitude', 255)->nullable();
            $table->string('tree_lattitude', 255)->nullable();
            $table->date('date_of_plantation');
            $table->integer('tree_plantaton_drive_id')->nullable();
            $table->integer('tree_plantaton_site_id')->nullable();
            $table->tinyInteger('tree_status')->nullable()->comment('1:alive,0:dead');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sd_geotags');
    }
};
