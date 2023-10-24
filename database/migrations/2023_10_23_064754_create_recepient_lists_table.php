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
            $table->id('recepient_id',20);
            $table->string('name',100);
            $table->string('blood_group',5);
            $table->string('phn_number',12)->unique();
            $table->string('hospital_name',150);
            $table->date('date_of_need',20);
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
