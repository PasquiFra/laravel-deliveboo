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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->required();
            $table->string('slug');
            $table->boolean('availability');
            $table->text('image')->nullable();
            $table->string('diet', 20)->nullable();
            $table->string('course', 20)->required();
            $table->text('ingredient')->nullable();
            $table->decimal('price')->required();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
