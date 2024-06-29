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
        Schema::create('traveller', function (Blueprint $table) {
            $table->id();
            $table->string('traveller_name');
            $table->string('traveller_email');
            $table->string('traveller_phone');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('address');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traveller');
    }
};
