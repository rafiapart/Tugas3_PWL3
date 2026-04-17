<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loan_detail', function (Blueprint $table) {
            $table->integer('id', false, true)->autoIncrement()->primary();
            $table->unsignedInteger('loan_id');
            $table->unsignedInteger('book_id');
            $table->boolean('is_return')->default(false);
            $table->timestamps();

            $table->foreign('loan_id')
                  ->references('id')
                  ->on('loans')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('book_id')
                  ->references('id')
                  ->on('books')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loan_detail');
    }
};