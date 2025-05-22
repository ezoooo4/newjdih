<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokumentasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'dokumentasi';

    protected $fillable = [
        'nama_kegiatan',
        'tgl_kegiatan',
        'kategori',
        'file',
        'status_dokumentasi',
        'url',
    ];

    public $timestamps = true;
}
