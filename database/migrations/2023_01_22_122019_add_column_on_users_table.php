<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
          
            $table->tinyInteger('type')->default(0) ->comment('Users: 0=>User, 1=>Admin, 2=>Manager');;
            /* Users: 0=>User, 1=>Admin, 2=>Manager */
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('type');
        });
    }
};
