<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSdTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sd_testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->nullable();
            $table->text('testimonial');
            $table->string('name', 150);
            $table->string('info', 255);
            $table->boolean('is_active')->default('0');
            $table->string('owner');
            $table->string('last_updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sd_testimonials');
    }
}
