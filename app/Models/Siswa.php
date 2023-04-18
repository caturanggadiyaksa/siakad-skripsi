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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function absen()
    {
        return $this->hasMany(Absen::class, 'id_siswa');
    }

    public function biayasiswa()
    {
        return $this->hasMany(BiayaSiswa::class, 'siswa_id');
    }
   
   
}
