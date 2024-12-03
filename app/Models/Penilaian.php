<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Murid;
use App\Models\MataPelajaran;
use App\Models\Guru;

class Penilaian extends Model
{
    protected $table = 'penilaian';
    protected $fillable = ['murid_id', 'mata_pelajaran_id', 'guru_id', 'nilai', 'deskripsi', 'tanggal'];

    public function murid()
    {
        return $this->belongsTo(Murid::class);
    }

    public function pelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
