<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'kriteria';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'kode',
        'bobot',
        'tipe',
    ];

    // Jika tidak menggunakan timestamp
    public $timestamps = true;

    // Kolom primary key
    protected $primaryKey = 'id';

    // Tipe data primary key
    protected $keyType = 'int';

    // Primary key autoincrement
    public $incrementing = true;

    // Kolom yang akan di-cast ke tipe data tertentu
    protected $casts = [
        'id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
