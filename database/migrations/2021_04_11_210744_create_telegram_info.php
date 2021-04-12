<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelegramInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(!Schema::hasTable('telegram_info')) {
            Schema::create('telegram_info', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('chat_id');
                $table->text('telegram_info')->comment('Json Info with telegram');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telegram_info');
    }
}
