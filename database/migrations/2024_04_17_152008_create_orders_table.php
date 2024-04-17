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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('order_date', 50)->required();
            $table->decimal('total')->required();
            $table->text('notes')->nullable();
            $table->string('name')->required();
            $table->string('lastname')->required();
            $table->string('email')->required();
            $table->string('address')->required();
            $table->string('phone')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
