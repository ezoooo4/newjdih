<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokumen extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'dokumen';

    protected $fillable = [
        'no_dokumen',
        'nama_dokumen',
        'asal_dokumen',
        'tgl_penetapan',
        'tgl_terbit',
        'file_dokumen',
        'deskripsi',
        'kategori_id',
    ];

    public $timestamps = true;

    /**
     * Relasi ke tabel kategori_dokumen
     */
    public function kategori()
    {
        return $this->belongsTo(KategoriDokumen::class, 'kategori_id');
    }
}
