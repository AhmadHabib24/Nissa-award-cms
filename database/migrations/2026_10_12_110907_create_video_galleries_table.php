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
        Schema::create('video_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->enum('type', ['upload', 'url'])->default('url'); // upload or external url (YouTube, Vimeo, etc.)
            $table->string('video_file')->nullable(); // stored path in storage/videos
            $table->text('video_url')->nullable(); // external link (YouTube/Vimeo/social media)
            $table->string('thumbnail')->nullable(); // custom thumbnail image
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_galleries');
    }
};
