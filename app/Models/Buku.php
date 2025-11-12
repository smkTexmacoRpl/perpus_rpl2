<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';

    protected $fillable = [
        'id_kategori',
        'judul',
        'pengarang',
        'tahun_terbit',
        'deskripsi',
        'cover',
        'stok',
    ];
    // protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
