<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table   = 'matapelajaran';
    protected $guarded = [];

    public function Entripenilaian()
    {
        return $this->belongsTo('App\Models\Entripenilaian');
    }
}
