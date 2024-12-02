<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;
use App\Models\Jadwal;

class Murid extends Model
{
    protected $table = 'murid';
    protected $fillable = ['nama', 'nis', 'kelas_id', 'email', 'telepon', 'alamat'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function jadwal()
    {
        return $this->belongsToMany(Jadwal::class, 'presensi', 'murid_id', 'jadwal_id');
    }
}
