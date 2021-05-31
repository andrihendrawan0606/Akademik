<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaransiswaController extends Controller
{
    public function index()
    {   
        return view('admin/manajemendata/pembayaransiswa/index');
        
    }
}
