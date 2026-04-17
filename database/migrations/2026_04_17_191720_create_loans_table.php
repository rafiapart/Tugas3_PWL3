<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->integer('id', false, true)->autoIncrement()->primary();
            $table->integer('user_npm', false, true);
            $table->date('loan_at');
            $table->date('return_at');
            $table->timestamps();

            $table->foreign('user_npm')
                  ->references('npm')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};