<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $guard   = 'kelas';
    protected $table   = 'kelas';
    protected $guarded = [];
}
