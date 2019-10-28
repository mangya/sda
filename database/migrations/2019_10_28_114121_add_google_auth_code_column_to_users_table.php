<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGoogleAuthCodeColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('oc_users', function (Blueprint $table) {
            $table->string('google_2fa_code')->nullable();
         });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oc_users', function (Blueprint $table) {
            $table->dropColumn(['google_2fa_code']);
        });
    }
}
