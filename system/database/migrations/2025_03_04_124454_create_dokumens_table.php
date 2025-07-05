<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('no_dokumen');   
            $table->string('nama_dokumen');
            $table->string('asal_dokumen');
            $table->date('tgl_penetapan');
            $table->string('tempat_terbit'); 
            $table->text('file_dokumen')->nullable(); 
            $table->string('link_dokumen')->nullable(); 
            $table->string('deskripsi')->nullable();   
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategori_dokumen')->onDelete('cascade');
            $table->enum('status', ['masih berlaku', 'tidak berlaku'])->default('masih berlaku');
            $table->year('tahun')->nullable();
            $table->string('judul');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
