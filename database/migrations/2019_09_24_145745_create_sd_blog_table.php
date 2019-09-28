<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSdBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sd_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 1000);
            $table->string('code', 16)->unique();
            $table->integer('user_id')->unsigned();
            $table->longText('content')->nullable();
            $table->integer('viewed_by')->default('0');
            $table->string('featured', 5)->default('No');
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sd_blog');
    }
}
