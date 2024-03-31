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
        Schema::create('store_settings', function (Blueprint $table) {
            $table->increments('store_id')->from(100)->index(); 
            $table->integer('user_id')->unsigned();
            $table->string('store_name');
            $table->string('store_logo');
            $table->string('store_title');
            $table->string('store_desc');
            $table->string('store_bg');
            $table->string('show_nps');
            $table->string('show_google');
            $table->string('show_trip_adv');
            $table->string('show_fb');
            $table->string('show_insta');
            $table->string('review_link_google');
            $table->string('review_link_ta');
            $table->string('review_link_fb');
            $table->string('review_link_insta');
            $table->timestamps();
            $table->foreign('user_id')
                     ->references('user_id')
                     ->on('user')
                     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_settings');
    }
};
