<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_calon_siswa',
        'asal_sekolah',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'nama_bapak',
        'nama_ibu',
        'nomor_bapak_ibu',
        'email'
    ];
    protected $dates = ['tanggal_lahir'];

    // This is optional if you want to ensure proper type casting
    public function getTanggalLahirAttribute($value)
    {
        return Carbon::parse($value);
    }
}
