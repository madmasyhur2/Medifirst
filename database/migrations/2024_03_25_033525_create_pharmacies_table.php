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
		Schema::create('pharmacies', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('owner_id')->unsigned();
			$table->text('logo_photo_path')->nullable();
			$table->string('name');
			$table->string('address')->nullable();
			$table->string('province')->nullable();
			$table->string('city')->nullable();
			$table->string('district')->nullable();
			$table->string('village')->nullable();
			$table->string('license_photo_path')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('pharmacies');
	}
};
