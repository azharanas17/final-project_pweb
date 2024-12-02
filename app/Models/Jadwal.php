<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;
use App\Models\Murid;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['kelas_id', 'mata_pelajaran', 'guru_id', 'hari', 'waktu_mulai', 'waktu_selesai'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function murid()
    {
        return $this->belongsToMany(Murid::class, 'presensi', 'jadwal_id', 'murid_id');
    }
}
