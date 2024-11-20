<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'bahasa_inggris',
        'matematika',
        'bahasa_indonesia',
        'kejuruan',
        'agama',
        'rata_rata'
    ];

    // Relasi ke model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
