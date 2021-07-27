<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entripenilaian extends Model
{
    use HasFactory;

    protected $guard   = 'entrinilai';
    protected $table   = 'entrinilai';
    protected $guarded = [];

    public function Mapel()
    {
        return $this->hasOne('App\Models\Mapel','id_mapel');
    }
}
