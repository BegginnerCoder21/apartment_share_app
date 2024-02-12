<?php

use App\Models\Commune;
use App\Models\SearchPost;
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
        Schema::create('commune_search_post', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Commune::class);
            $table->foreignIdFor(SearchPost::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commune_search_post');
    }
};
