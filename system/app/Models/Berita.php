<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'berita';

    protected $fillable =  [
        'judul_berita',
        'isi_berita',
        'tgl_berita',
        'foto_berita',
        'pembuat_berita',
        
    ];

    public $timestamps = true;

}
