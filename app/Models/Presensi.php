<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Murid;
use App\Models\Jadwal;

class Presensi extends Model
{
    protected $table = 'presensi';
    protected $fillable = ['murid_id', 'jadwal_id', 'status', 'tanggal', 'catatan'];

    public function murid()
    {
        return $this->belongsTo(Murid::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
