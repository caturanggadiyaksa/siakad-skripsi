<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = "table_mapel";

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'id');
    }
    public function Absen()
    {
        return $this->hasMany(Absen::class, 'id');
    }
}
