<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->default(null);
            $table->string('ip', 30)->nullable()->default(null);
            $table->date('date')->default(Carbon::now());
            $table->integer('count')->unsigned()->nullable()->default(0);
            $table->json('user_agent')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
};
