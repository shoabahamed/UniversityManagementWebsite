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
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->string('hall_name');
            $table->string('image_path');
            $table->unsignedInteger('provost_roll')->nullable();
            $table->unsignedInteger('assistant_provost_roll')->nullable();
            $table->unsignedInteger('assistant_provost_roll_2')->nullable(); 
            $table->timestamps();

    
            $table->foreign('provost_roll')->references('teacher_roll')->on('teachers')->onDelete('cascade');
            $table->foreign('assistant_provost_roll')->references('teacher_roll')->on('teachers')->onDelete('cascade');
            $table->foreign('assistant_provost_roll_2')->references('teacher_roll')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halls');
    }
};
