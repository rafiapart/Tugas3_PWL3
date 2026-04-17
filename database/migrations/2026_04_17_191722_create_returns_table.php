<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('returns', function (Blueprint $table) {
            $table->integer('id', false, true)->autoIncrement()->primary();
            $table->integer('loan_detail_id', false, true);
            $table->boolean('charge')->default(false);
            $table->integer('amount')->default(0);

            $table->foreign('loan_detail_id')
                  ->references('id')
                  ->on('loan_detail')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('returns');
    }
};