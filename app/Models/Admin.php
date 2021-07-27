<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;


class Admin extends Model
{
    use HasFactory;
    use Notifiable;
    protected $guard   = 'admin';
    protected $table   = 'admin';
    protected $guarded = [];
}
