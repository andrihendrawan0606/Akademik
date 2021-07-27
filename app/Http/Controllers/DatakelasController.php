<?php

namespace App\Http\Controllers;
use App\Models\Kelas;

use Illuminate\Http\Request;

class dataKelasController extends Controller
{
    public function index()
    {   
        $kelas = Kelas::paginate(5);
        return view('admin.masterdata.datakelas.index',compact('kelas'));
    }

    public function create()
    {   
        $kelas = Kelas::paginate(5);
        return view('admin.masterdata.datakelas.create',compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_kelas' => 'required',
            'nama_kelas' => 'required|in:XI RPL 1,XI RPL 2,XI RPL 3,XI TKJ 1,XI TKJ 2,XI TKJ 3,XI BC 1,XI BC 2,XI BC 3,XI MM 1,XI MM2,XI MM 3,XI TEI',
            'guru' => 'required',
            'ruangan' => 'required',
            'jurusan' => 'required|in:Rekayasa Perangkat Lunak,Multimedia,Brodcast,Teknik Komputer dan Jaringan,Teknik Elektronika Industri',
            'jumlah_siswa' => 'required',
        ]);

        Kelas::create(
            [
                'kode_kelas' =>$request->kode_kelas,
                'nama_kelas' =>$request->nama_kelas,
                'guru' =>$request->guru,
                'ruangan' =>$request->ruangan,
                'jurusan' =>$request->jurusan,
                'jumlah_siswa' =>$request->jumlah_siswa,
            ]
        );
        return redirect()->route('data.kelas')->with(['success' => 'Data Kelas No '.$request->id.'Berhasil Di Tambah']);

    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('admin.masterdata.datakelas.edit',compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_kelas' => 'required',
            'nama_kelas' => 'required|in:XI RPL 1,XI RPL 2,XI RPL 3,XI TKJ 1,XI TKJ 2,XI TKJ 3,XI BC 1,XI BC 2,XI BC 3,XI MM 1,XI MM2,XI MM 3,XI TEI',
            'guru' => 'required',
            'ruangan' => 'required',
            'jurusan' => 'required|in:Rekayasa Perangkat Lunak,Multimedia,Brodcast,Teknik Komputer dan Jaringan,Teknik Elektronika Industri',
            'jumlah_siswa' => 'required',
        ]);

        kelas::where('id', $id)->update([
            'kode_kelas' =>$request->kode_kelas,
            'nama_kelas' =>$request->nama_kelas,
            'guru' =>$request->guru,
            'ruangan' =>$request->ruangan,
            'jurusan' =>$request->jurusan,
            'jumlah_siswa' =>$request->jumlah_siswa,
        ]);
        return redirect()->route('data.kelas')->with(['success' => 'Data Kelas No '.$request->id.'Berhasil Di Update']);
    }

    public function destroy($id, Request $request)
    {
        kelas::destroy($id);
        return redirect()->route('data.kelas')->with(['success' => 'Data Kelas No '.$request->id .'- Berhasil Di Hapus']);
    }

}
