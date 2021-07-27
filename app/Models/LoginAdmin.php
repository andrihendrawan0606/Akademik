<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginAdmin extends User
{
    use HasFactory;
    protected $table = 'admin';
    protected $hidden = ['password'];
    
}
