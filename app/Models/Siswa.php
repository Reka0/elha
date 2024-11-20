<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
    ];
    public function nilai()
    {
        return $this->hasMany(NilaiSiswa::class, 'siswa_id');
    }
}
