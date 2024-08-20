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
        Schema::create('archives', function (Blueprint $table) {
            $table->id();
            $table->string('no_arsip');
            $table->unsignedBigInteger('signed_by')->nullable();
            $table->date('tanggal_arsip');
            $table->string('file_arsip');
            $table->string('departement');
            $table->string('status')->default('diproses');
            $table->text('signature')->nullable();
            $table->timestamps();
            $table->foreign('signed_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archives');
    }
};
