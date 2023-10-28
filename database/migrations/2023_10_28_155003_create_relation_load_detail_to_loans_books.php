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
        Schema::table('loan_detail', function (Blueprint $table) {
            $table->foreign('loan_id')->references('id')->on('loans')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('books')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loan_detail', function (Blueprint $table) {
            $table->dropForeign(['loan_id']);
            $table->dropForeign(['book_id']);
        });
    }
};
