<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table   = 'kelas';
    protected $guarded = [];

    // public function guru()
    // {
    //     return $this->belongsTo('App\Models\Guru','id_guru','id');
    // }
}
