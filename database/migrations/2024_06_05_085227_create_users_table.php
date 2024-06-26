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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->string('phone', 100);
            $table->string('address')->nullable();
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('country', 50);
            $table->string('password');

            $table->string('otp', 10);
            $table->rememberToken();
            
            $table->bigInteger('user_type_id')->unsigned();
            $table->foreign('user_type_id')->references('id')->on('user_types')->cascadeOnUpdate()->restrictOnDelete();            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
