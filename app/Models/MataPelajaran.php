<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Penilaian;

class MataPelajaran extends Model
{
    protected $table = 'mata_pelajaran';
    protected $fillable = ['nama', 'deskripsi'];

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class);
    }
}
