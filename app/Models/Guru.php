<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $guard   = 'guru';
    protected $table   = 'guru';
    protected $guarded = [];

    // public function kelas()
    // {
    //     return $this->hasMany('App\Models\kelas','id_kelas','id');
    // }
}
