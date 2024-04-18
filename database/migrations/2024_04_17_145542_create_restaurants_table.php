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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->required();
            $table->string('slug');
            $table->string('city', 50)->required();
            $table->string('address', 50)->required();
            $table->string('cap', 7)->required();
            $table->string('phone', 20);
            $table->string('email');
            $table->string('vat')->required()->unique();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
