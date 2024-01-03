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
        Schema::create('kurirs', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->string('no_hp');
            $table->string('address');
            $table->integer('zip_code');
            $table->tinyInteger('is_active');
            $table->timestamps();
            $table->integer('province_id');
            $table->integer('city_id');
            $table->integer('subdistrict_id');
            $table->integer('village_id');
            $table->string('foto');
            $table->integer('vendor_id');
            $table->integer('office_id');
            $table->string('plat_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurirs');
    }
};
