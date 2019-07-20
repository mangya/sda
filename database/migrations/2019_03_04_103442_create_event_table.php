<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sd_event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('slug', 200)->unique();
            $table->integer('campaign_id')->unsigned()->nullable();
            $table->text('short_info')->nullable();
            $table->longText('description')->nullable();
            $table->integer('viewed_by')->default('0');
            $table->string('featured', 10)->nullable();
            $table->string('image', 1000)->nullable();
            $table->datetime('start_date')->nullable();
            $table->datetime('end_date')->nullable();
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
