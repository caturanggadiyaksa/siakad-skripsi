<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "table_guru";

    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'alamat',
        'tanggal_lahir', 
        'nomor_telepon',
    ];
}
