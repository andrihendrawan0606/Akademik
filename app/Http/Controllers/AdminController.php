<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\Siswa;
use App\Models\Guru;


class AdminController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin','walikelas')->user();
        $siswa = Siswa::all()->count();
        $Guru = Guru::all()->count();
        return view('admin.dashboard',compact('admin','siswa','Guru',));
    }
}
