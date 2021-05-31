<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datajadwalController extends Controller
{
    public function index()
    {   
        return view('admin/masterdata/datajadwal/index');
    }
}
