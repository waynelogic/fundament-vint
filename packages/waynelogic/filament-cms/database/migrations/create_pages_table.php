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
        Schema::create('cms_pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('cms_pages')->nullOnDelete();
            $table->boolean('active')->default(true);

            $table->string('title');
            $table->string('slug');
            $table->string('url')->unique()->index();
            $table->string('template')->nullable();
            $table->string('view')->nullable();
            // Meta
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            // Content
            $table->text('preview_text')->nullable();
            $table->text('content')->nullable();

            $table->timestamp('published_at')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_pages');
    }
};
