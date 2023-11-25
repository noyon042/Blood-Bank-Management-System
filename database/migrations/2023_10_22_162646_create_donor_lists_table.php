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
        Schema::create('donor_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->unique();
            $table->string('email',100)->unique();
            $table->string('blood_group',5);
            $table->string('contact',70);
            $table->text('address')->nullable();
            $table->date('date');
            $table->string('image')->nullable();
            $table->timestamps();
        });

    }
    public function down(): void
    {
        Schema::dropIfExists('donor_lists');
    }
};
