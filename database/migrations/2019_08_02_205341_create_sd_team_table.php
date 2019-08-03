<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSdTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sd_team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->nullable();
            $table->string('name', 150);
            $table->string('email', 200)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('linkedin_url', 400)->nullable();
            $table->string('twitter_url', 400)->nullable();
            $table->text('info');
            $table->string('owner');
            $table->boolean('is_active')->default('0');
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
        Schema::dropIfExists('sd_team');
    }
}
