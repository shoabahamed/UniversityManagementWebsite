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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string("email")->unique();
            $table->string('name');
            $table->string('image_path');
            $table->string('father_name');
            $table->string("mother_name");
            $table->unsignedInteger('mobile_no')->unique();
            $table->string('address');
            $table->string("hall_name");
            $table->string("blood_group");
            $table->string("gender");
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
