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
        Schema::create('recepient_lists', function (Blueprint $table) {
            $table->id('recepient_id',5);
            $table->string('name',50);
            $table->string('blood_group');
            $table->string('phn_number',12)->unique();
            $table->string('hospital_name',100);
            $table->date('date_of_need');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepient_lists');
    }
};
