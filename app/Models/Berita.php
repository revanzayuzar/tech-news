<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_berita',
        'gambar',
        'sumber',
        'penulis',
        'tanggal_upload',
        'isi_berita',
    ];
}
