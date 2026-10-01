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
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nominee_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('edition_id')->constrained()->cascadeOnDelete();
            $table->string('voter_email');
            $table->string('verification_token')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->string('ip_address')->nullable();
            $table->enum('status', ['valid', 'suspicious', 'rejected'])->default('valid');
            $table->string('reason')->nullable();
            $table->timestamps();
            
            // One vote per email per category per edition
            $table->unique(['voter_email', 'category_id', 'edition_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
