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
        Schema::create('received_donors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_id')->constrained('donor_lists')->cascadeOnDelete();
            $table->foreignId('recepient_id')->constrained('recepient_lists')->cascadeOnDelete();
            $table->string('response');
            $table->string('hospital_name');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('received_donors');
    }
};
