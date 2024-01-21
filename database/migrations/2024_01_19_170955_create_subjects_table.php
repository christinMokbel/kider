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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subjectname',100);
            $table->string('image',100);
            //$table->string('teacherimage',100);
            $table->integer('age');
            $table->time('time');
            $table->string('capacity',100);
            $table->integer('price');
            $table->boolean('published');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
