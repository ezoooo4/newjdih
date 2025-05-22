<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;   
class Agenda extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'agenda';

    protected $fillable =  [
        'pembuat_agenda',
        'judul_agenda',
        'deskripsi_agenda',
        'isi_agenda',
        'tempat_agenda',
        'tgl_agenda',
        'status_agenda',   
    ];

    public $timestamps = true;
    
}
