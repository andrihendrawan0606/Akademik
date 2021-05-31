<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaisiswaController extends Controller
{
    public function index()
    {   
        return view('admin/manajemendata/nilaisiswa/index');
    }
}
