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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('work_name');
            $table->text('work_about_text')->default('');
            $table->string('poster_path');
            $table->string('type')->default('image');

            $table->foreignId('author_id')
                ->constrained(table: 'artists', column: 'id')
                ->cascadeOnDelete();
            $table->foreignId('event_id')
                ->nullable()
                ->constrained(table: 'events', column: 'id')
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
