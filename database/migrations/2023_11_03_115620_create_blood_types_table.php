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
        Schema::create('blood_types', function (Blueprint $table) {
            $table->id();
            $table->string('blood_id',20);
            $table->string('donor_name',50);
            $table->string('contact',20);
            $table->string('name',50);
            $table->string('hospital_name',20);
            $table->date('date_of_need');
            $table->string('location',50);
            $table->text('reason',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_types');
    }
};
