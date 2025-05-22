<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriDokumen extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kategori_dokumen';

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    public $timestamps = true;


    public function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'kategori_id');
    }
}
