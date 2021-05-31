<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function dashboard()
    {
        
    }


    public function index()
    {   
        $siswa = Siswa::paginate(5);
        return view('admin.masterdata.datasiswa.index',compact('siswa'));
    }

    public function create()
    {   
        $siswa = Siswa::paginate(5);
        return view('admin.masterdata.datasiswa.create',compact('siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required|in:XI RPL 1,XI RPL 2,XI RPL 3',
            'kelamin' => 'required|in:laki-laki,perempuan',
        ]);

        Siswa::create(
            [
                'nisn' =>$request->nisn,
                'nama' =>$request->nama,
                'email' =>$request->email,
                'kelas' =>$request->kelas,
                'kelamin' =>$request->kelamin,
            ]
        );
        return redirect()->route('data.siswa')->with(['success' => 'Data Siswa '.$request->id.'Berhasil Di Tambah']);

    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('admin.masterdata.datasiswa.edit',compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required|in:XI RPL 1,XI RPL 2,XI RPL 3',
            'kelamin' => 'required|in:laki-laki,perempuan',
        ]);

        Siswa::where('id', $id)->update([
            'nisn' =>$request->nisn,
            'nama' =>$request->nama,
            'email' =>$request->email,
            'kelas' =>$request->kelas,
            'kelamin' =>$request->kelamin,
        ]);
        return redirect()->route('data.siswa')->with(['success' => 'Data Siswa '.$request->id.'Berhasil Di Update']);
    }

    public function destroy($id, Request $request)
    {
        Siswa::destroy($id);
        // return redirect('admin.siswadanalumni.datasiswa.index')->with(['succes' => 'Data Siswa Berhasil Di Hapus']);
        return redirect()->route('data.siswa')->with(['success' => 'Data Siswa '.$request->id .'- Berhasil Di Hapus']);
    }


}
