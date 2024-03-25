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
        Schema::create('blog_h_c_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('id_dia_chi');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->text('keywords')->nullable();
            $table->longText('meta_description')->nullable();
            $table->text('meta_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_h_c_m_s');
    }
};
