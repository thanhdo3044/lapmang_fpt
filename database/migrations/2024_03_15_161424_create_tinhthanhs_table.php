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
        Schema::create('tinhthanhs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_tinh_thanh');
            $table->string('slug');
            $table->string('id_khu_vuc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tinhthanhs');
    }
};
