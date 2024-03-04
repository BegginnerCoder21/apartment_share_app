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
        Schema::create('search_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('budget');
            $table->text('description');
            $table->integer('coloc_gender');
            $table->date('availability_date');
            $table->integer('appartment_type');
            $table->foreignIdFor(\App\Models\User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('search_posts');
    }
};
