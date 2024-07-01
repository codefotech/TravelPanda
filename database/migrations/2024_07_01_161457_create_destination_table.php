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
        Schema::create('destination', function (Blueprint $table) {
            $table->id();
            $table->string('destination_name');
            $table->string('heading');
            $table->string('short_description');
            $table->string('package_heading');
            $table->string('package_subheading');
            $table->string('detail_heading');
            $table->string('detail_subheading');
            $table->string('introduction');
            $table->string('experience');
            $table->string('weather');
            $table->string('hotel');
            $table->string('transportation');
            $table->string('culture');
            $table->string('featured_photo')->nullable();
            $table->string('banner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination');
    }
};
