<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'alternatif';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'C1',
        'C2',
        'C3',
        'C4'
    ];

    // Jika tidak menggunakan timestamp
    public $timestamps = true;

    // Kolom primary key
    protected $primaryKey = 'id';

    // Tipe data primary key
    protected $keyType = 'bigint';

    // Primary key autoincrement atau tidak
    public $incrementing = false;

    // Kolom yang akan di-cast ke tipe data tertentu
    protected $casts = [
        'id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
