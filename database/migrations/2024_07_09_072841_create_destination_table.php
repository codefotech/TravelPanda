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
            $table->text('short_description')->nullable();
            $table->string('package_heading');
            $table->string('package_subheading');
            $table->string('detail_heading');
            $table->string('detail_subheading');
            $table->text('introduction')->nullable();
            $table->text('experience')->nullable();
            $table->text('weather')->nullable();
            $table->text('hotel')->nullable();
            $table->text('transportation')->nullable();;
            $table->text('culture')->nullable();
            $table->string('photo')->nullable();
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
