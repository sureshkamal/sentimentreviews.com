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
        Schema::dropIfExists('user');
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id')->index(); 
            $table->integer('user_type_id')->unsigned();
            $table->string('name');
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('no_of_logins')->default(0);
            $table->timestamp('last_login')->nullable();
            $table->timestamp('last_logout')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('user_type_id')
                     ->references('user_type_id')
                     ->on('user_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
