<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_penilaian extends Model
{
    use HasFactory;
    
    protected $guard   = 'kategori_penilaian';
    protected $table   = 'kategori_penilaian';
    protected $guarded = [];

    public function Siswa()
    {
        return $this->hasOne('App\Models\Siswa','id_siswa','id');
    }
}
