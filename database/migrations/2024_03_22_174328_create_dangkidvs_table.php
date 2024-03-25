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
        Schema::create('dangkidvs', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->string('phone');
            $table->string('diachi');
            $table->string('dichvu');
            $table->date('datenow');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dangkidvs');
    }
};
