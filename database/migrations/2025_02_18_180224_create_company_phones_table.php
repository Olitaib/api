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
        Schema::create('company_phones', function (Blueprint $table) {
            $table->id();
            $table->integer('country_code');
            $table->integer('area_code');
            $table->integer('phone_number');
            $table->foreignId('company_id')->constrained();
            $table->timestamps();

            $table->index('company_id');
            $table->unique(['country_code', 'area_code', 'phone_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_phones');
    }
};
