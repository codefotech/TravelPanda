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
        Schema::create('email_configuration', function (Blueprint $table) {
            $table->id();
            $table->string('send_email', 100);
            $table->string('receive_email', 100);
            $table->string('smtp_host', 100);
            $table->string('smtp_port');
            $table->string('smtp_user', 100);
            $table->string('smtp_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_configuration');
    }
};
