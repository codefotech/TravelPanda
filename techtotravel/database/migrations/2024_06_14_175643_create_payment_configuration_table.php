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
        Schema::create('payment_configuration', function (Blueprint $table) {
            $table->id();
            $table->string('payment_email', 100);
            $table->string('stripe_public_key');
            $table->string('stripe_secret_key');
            $table->json('bank_details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_configuration');
    }
};
