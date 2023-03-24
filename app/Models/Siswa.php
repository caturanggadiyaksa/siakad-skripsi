<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "table_siswa";

    protected $fillable = [
        'nama',
        'id_kelas',
        'jenis_kelamin',
        'alamat',
        'tanggal_lahir', 
        'nomor_telepon',
    ];
}
