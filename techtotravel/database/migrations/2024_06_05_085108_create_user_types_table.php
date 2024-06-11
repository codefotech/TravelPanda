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
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->char('type_id', 3);
            $table->string('code', 20)->unique();
            $table->string('name', 40);
            $table->integer('order');
            $table->timestamps();
        });

        DB::table('user_types')->insert([
            ['type_id' => '1', 'code' => 'admin', 'name' => 'admin', 'order' => 0],
            ['type_id' => '2', 'code' => 'users', 'name' => 'users', 'order' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_types');
    }
};
