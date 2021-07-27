<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    
    protected $guard   = 'siswa';
    protected $table   = 'siswa';
    protected $guarded = [];

    public function Kategori_penilaian()
    {
        return $this->belongsTo('App\Models\Kategori_penilaian');
    }
}
