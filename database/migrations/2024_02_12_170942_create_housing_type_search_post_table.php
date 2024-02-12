<?php

use App\Models\SearchPost;
use App\Models\HousingType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('housing_type_search_post', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SearchPost::class);
            $table->foreignIdFor(HousingType::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housing_type_search_post');
    }
};
