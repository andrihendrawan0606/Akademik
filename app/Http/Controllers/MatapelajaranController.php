<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Siswa;

class MatapelajaranController extends Controller
{
    public function index()
    {   
        return view('admin/manajemendata/matapelajaran/index');
        
    }

}
