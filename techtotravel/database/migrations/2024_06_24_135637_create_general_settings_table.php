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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo', 100);
            $table->string('favicon', 100);
            $table->string('email', 100);
            $table->string('phone', 100);
            $table->string('address');
            $table->string('copyright_text', 150);
            $table->string('social_icon', 100);
            $table->string('social_icon_url');
            $table->string('stunning_place');
            $table->string('satisfied_customer');
            $table->string('travel_places');
            $table->string('banner', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
