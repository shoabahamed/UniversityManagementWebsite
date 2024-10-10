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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('teacher_roll')->unique();
            $table->string('name');
            $table->string('image_path');
            $table->string("dept");
            $table->string("role");
            $table->tinyInteger("is_dean");
            $table->tinyInteger("is_head");
            $table->string('head_department')->nullable();
            $table->string('dean_faculty')->nullable();
            $table->string("email");
            $table->unsignedBigInteger("phone");
            $table->unsignedBigInteger('fax');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
