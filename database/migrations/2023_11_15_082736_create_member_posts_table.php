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
        Schema::create('member_posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('email');
            $table->string('blood_group');
            $table->string('contact');
            $table->string('address');
            $table->string('date')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_posts');
    }
};
