<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MatapelajaranController extends Controller
{
    public function index()
    {   
        $mapel = Mapel::paginate(5);
        return view('admin.masterdata.matapelajaran.index',compact('mapel'));
    }

    public function create()
    {   
        $mapel = Mapel::paginate(5);
        return view('admin.masterdata.matapelajaran.create',compact('mapel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guru' => 'required',
            'kode_mapel' => 'required',
            'nama_mapel' => 'required',
        ]);

        Mapel::create(
            [
                'guru'=>$request->guru,
                'kode_mapel' =>$request->kode_mapel,
                'nama_mapel' =>$request->nama_mapel,
            ]
        );
        return redirect()->route('data.mapel')->with(['success' => 'Data Mapel No '.$request->id.'Berhasil Di Tambah']);

    }

    public function edit($id)
    {
        $mapel = Mapel::find($id);
        return view('admin.masterdata.matapelajaran.edit',compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'guru' => 'required',
            'kode_mapel' => 'required',
            'nama_mapel' => 'required',
        ]);

        Mapel::where('id', $id)->update([
            'guru' =>$request->guru,
            'kode_mapel' =>$request->kode_mapel,
            'nama_mapel' =>$request->nama_mapel,
        ]);
        return redirect()->route('data.mapel')->with(['success' => 'Data Mapel No '.$request->id.'Berhasil Di Update']);
    }

    public function destroy($id, Request $request)
    {
        Mapel::destroy($id);
        return redirect()->route('data.mapel')->with(['success' => 'Data Mapel No '.$request->id .'- Berhasil Di Hapus']);
    }

}
