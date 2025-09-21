<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->string('description'); 
            $table->string('subjects')->nullable(); 
            $table->string('icon')->nullable(); 
            $table->string('duration')->default('2 yil'); 
            $table->integer('student_count')->default(0);
            $table->string('color')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
}