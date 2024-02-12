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
        Schema::create('housing_posts', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_furnished');
            $table->integer('rent');
            $table->integer('security_deposit');
            $table->text('description_post');
            $table->string('roommate_gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housing_posts');
    }
};
