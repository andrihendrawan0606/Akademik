<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Entripenilaian;
use App\Models\Mapel;
use App\Exports\EntrinilaiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class EntrinilaiController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('admin.akademik.entripenilaian.index',compact('siswa'));
    }

    public function create($id)
    {
        $siswa = Siswa::find($id);
        $mapel = Mapel::all();
        return view('admin.akademik.entripenilaian.create',compact('siswa','mapel'));
    }

    public function entri(Request $request)
    {
        $request->validate([
            'mapel' => 'required',
            'kd1' => 'required',
            'kd2' => 'required|',
            'kd3' => 'required',
            'kd4' => 'required',
            'kd5' => 'required',
            'kd6' => 'required',
            'kd7' => 'required',
            'kd8' => 'required',
            'kd9' => 'required',
            'kd10' => 'required',
            'uts' => 'required',
            'uas' => 'required',
        ]);

        Entripenilaian::create(
            [
                'mapel' =>$request->mapel,
                'kd325' =>$request->kd1,
                'kd326' =>$request->kd2,
                'kd327' =>$request->kd3,
                'kd328' =>$request->kd4,
                'kd329' =>$request->kd5,
                'kd330' =>$request->kd6,
                'kd331' =>$request->kd7,
                'kd332' =>$request->kd8,
                'kd333' =>$request->kd9,
                'kd334' =>$request->kd10,
                'uts' =>$request->uts,
                'uas' =>$request->uas,
            ]
        );
        return redirect()->route('data.entripenilaian')->with(['success' => 'Data Penilaian No '.$request->id.'Berhasil Di Tambah']);
    }

    public function show($id)
    {
        $nilaisiswa = Entripenilaian::find($id);
        $identitas = Siswa::find($id);
        return view('admin.akademik.entripenilaian.show',compact('nilaisiswa','identitas'));
    }

    public function export_excel()
	{
		return Excel::download(new EntrinilaiExport, 'Entrinilai.xlsx');
	}

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $mapel = Mapel::all();
        return view('admin.akademik.entripenilaian.edit',compact('siswa','mapel'));
    }
}

