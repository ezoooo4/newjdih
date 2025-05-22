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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('no_dokumen');   
            $table->string('nama_dokumen');
            $table->string('asal_dokumen');
            $table->date('tgl_penetapan');
            $table->date('tgl_terbit');
            $table->text('file_dokumen');
            $table->string('deskripsi');
            $table->unsignedBigInteger('kategori_id');           
            $table->foreign('kategori_id')->references('id')->on('kategori_dokumen')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
