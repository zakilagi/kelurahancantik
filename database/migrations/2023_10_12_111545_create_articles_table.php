<?php

use App\Models\Category;
use App\Models\User;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Category::class)->nullable();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('featured_image_url')->nullable();
            $table->longText('body')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_tags')->nullable();
            $table->dateTime('scheduled_for')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
