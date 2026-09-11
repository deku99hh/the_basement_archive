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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('artist_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username')->unique();
            $table->text('artist_about_text');
            $table->string('avatar')->default('assets/teto.png');
            $table->enum('role', ['admin', 'artist'])
                ->default('artist');
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('buy_me_a_coffee')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
