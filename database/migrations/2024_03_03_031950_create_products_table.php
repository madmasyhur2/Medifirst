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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('category_id');
            $table->string('sku_code')->unique();
            $table->string('name');
            $table->enum('unit', ['pcs', 'strip', 'box'])->default('pcs');
            $table->enum('variant', ['tablet', 'botol', 'ampul', 'dus', 'kapsul', 'lain-lain']);
            $table->enum('group', ['obat bebas', 'obat bebas terbatas', 'obat keras', 'lain-lain']);
            $table->boolean('is_consignment')->default(false);
            $table->string('product_photo_path')->nullable();
            $table->string('location');
            $table->decimal('cost', 10, 2);
            $table->decimal('margin', 10, 2);
            $table->decimal('selling_price', 10, 2);
            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
