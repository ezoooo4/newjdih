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
        'tempat_terbit', 
        'file_dokumen',
        'link_dokumen',
        'deskripsi',
        'kategori_id',
        'status',
        'tahun',
        'judul',
    ];

    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo(KategoriDokumen::class, 'kategori_id');
    }
}
