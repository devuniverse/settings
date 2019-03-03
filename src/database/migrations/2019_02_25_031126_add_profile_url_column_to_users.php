<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileUrlColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          if (!Schema::hasColumn('users', 'profile_picture')){
            Schema::table('users', function (Blueprint $table) {
              $table->string('profile_image')->nullable();
              $table->string('profile_picture')->default('/images/user.png');
            });
          }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          if (Schema::hasColumn('users', 'profile_picture')){
            Schema::table('users', function (Blueprint $table) {
              $table->dropColumn('profile_image');
              $table->dropColumn('profile_picture');
            });
          }
        });
    }
}
