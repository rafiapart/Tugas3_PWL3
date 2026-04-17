<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->integer('id', false, true)->autoIncrement()->primary();
            $table->string('title', 255);
            $table->string('author', 255);
            $table->year('year');
            $table->string('publisher', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('cover', 255)->nullable();
            $table->unsignedInteger('bookshelf_id');
            $table->unsignedInteger('category_id');
            $table->timestamps();

            $table->foreign('bookshelf_id')
                  ->references('id')
                  ->on('bookshelfs')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};