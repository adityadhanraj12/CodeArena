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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('creator');
            $table->timestamps();
        });

        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('mcqs', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('correct_ans');
            $table->foreignId('admin_id')->constrained('admin')->onDelete('cascade');
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
            $table->integer('status')->default(1); // 1 = started, 2 = completed
            $table->timestamps();
        });

        Schema::create('mcq_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('record_id')->constrained('records')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('mcq_id')->constrained('mcqs')->onDelete('cascade');
            $table->string('select_answer')->nullable();
            $table->boolean('is_correct')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mcq_records');
        Schema::dropIfExists('records');
        Schema::dropIfExists('mcqs');
        Schema::dropIfExists('quizzes');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('admin');
    }
};
