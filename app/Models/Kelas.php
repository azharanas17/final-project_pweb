<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Murid;
use App\Models\Guru;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['nama', 'wali_kelas_id', 'deskripsi'];

    public function murid()
    {
        return $this->hasMany(Murid::class);
    }

    public function waliKelas()
    {
        return $this->belongsTo(Guru::class, 'wali_kelas_id');
    }
}
