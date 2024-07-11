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
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('destination_name');
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('location')->nullable();
            $table->date('tour_start_date');
            $table->date('tour_end_date');
            $table->date('last_booking_date');
            $table->text('map')->nullable();
            $table->text('itinerary')->nullable();
            $table->decimal('price', 10, 2);
            $table->text('policy')->nullable();
            $table->text('terms_and_conditions')->nullable();
            $table->enum('featured', ['Yes', 'No'])->default('No');
            $table->string('photo')->nullable();
            $table->string('banner')->nullable();
            $table->string('tour_photos')->nullable();
            $table->string('tour_videos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package');
    }
};
