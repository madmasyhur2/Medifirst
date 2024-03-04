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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cashier_id');
            $table->unsignedBigInteger('membership_id')->nullable();
            $table->string('sold_to');
            $table->boolean('is_cash')->default(true);
            $table->dateTime('sold_at');
            $table->decimal('price', 10, 2);
            $table->foreign('cashier_id')->references('id')->on('users');
            $table->foreign('membership_id')->references('id')->on('memberships');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
