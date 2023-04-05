<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = "table_jadwal";

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
}
