<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;
use App\Models\Murid;
use App\Models\MataPelajaran;
use App\Models\Kelas;

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

    public function pelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
