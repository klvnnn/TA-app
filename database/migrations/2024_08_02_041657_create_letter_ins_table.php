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
        Schema::create('letter_ins', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->date('tanggal_surat');
            $table->string('perihal_surat');
            $table->string('pengirim_surat');
            $table->string('file_surat');
            $table->string('disposisi_surat');
            $table->string('diteruskan_ke');
            $table->string('pertalian_surat');
            $table->string('filename');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letter_ins');
    }
};
