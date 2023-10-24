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
            $table->string('donor_name',100)->unique();
            $table->string('blood_group',5);
            $table->string('contact',70)->unique();
            $table->text('address')->nullable();
            $table->date('last_donation_date');
            $table->timestamps();
        });

    }
};
