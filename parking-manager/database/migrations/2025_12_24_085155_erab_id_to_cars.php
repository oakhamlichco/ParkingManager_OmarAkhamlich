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
        Schema::table('cars', function (Blueprint $table) {
            //unsignedBigInteger defektuzko id-a datu mota hori delako. Bestela migration-a errorea emango du.
            $table->unsignedBigInteger('erabiltzaile_id')->nullable();

            //foreign key-a zein den, nora apuntatzen duen... jakiteko
            $table->foreign('erabiltzaile_id')
                ->references('id')
                ->on('erabiltzaileak')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            //
            $table->dropForeign(['erabiltzaile_id']);
            $table->dropColumn('erabiltzaile_id');
        });
    }
};
