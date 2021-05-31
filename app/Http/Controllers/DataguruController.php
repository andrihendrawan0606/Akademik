<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class dataguruController extends Controller
{
    public function index()
    {   
        $guru = Guru::paginate(5);
        return view('admin.masterdata.dataguru.index',compact('guru'));
    }

    public function create()
    {   
        $guru = Guru::paginate(5);
        return view('admin.masterdata.dataguru.create',compact('guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required|in:XI RPL 1','XI RPL 2','XI RPL 3','XI TKJ 1','XI TKJ 2','XI TKJ 3','XI BC 1','XI BC 2','XI BC 3','XI MM 1','XI MM2','XI MM3','XI TEI',
            'mapel' => 'required',
            'jurusan' => 'required|in:Rekayasa Perangkat Lunak, Multimedia, Brodcast, Teknik Komputer dan Jaringan, Teknik Elektronika Industri',
        ]);

        Guru::create(
            [
                'nip' =>$request->nip,
                'nama' =>$request->nama,
                'email' =>$request->email,
                'kelas' =>$request->kelas,
                'mapel' =>$request->mapel,
                'jurusan' =>$request->jurusan,
            ]
        );
        return redirect()->route('data.guru')->with(['success' => 'Data guru '.$request->id.'Berhasil Di Tambah']);

    }

    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('admin.masterdata.dataguru.edit',compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required|in:XI RPL 1','XI RPL 2','XI RPL 3','XI TKJ 1','XI TKJ 2','XI TKJ 3','XI BC 1','XI BC 2','XI BC 3','XI MM 1','XI MM2','XI MM 3','XI TEI',
            'mapel' => 'required',
            'jurusan' => 'required|in:Rekayasa Perangkat Lunak, Multimedia, Brodcast, Teknik Komputer dan Jaringan, Teknik Elektronika Industri',
        ]);

        Guru::where('id', $id)->update([
            'nip' =>$request->nip,
            'nama' =>$request->nama,
            'email' =>$request->email,
            'kelas' =>$request->kelas,
            'mapel' =>$request->mapel,
            'jurusan' =>$request->jurusan,
        ]);
        return redirect()->route('data.guru')->with(['success' => 'Data Guru '.$request->id.'Berhasil Di Update']);
    }

    public function destroy($id, Request $request)
    {
        Guru::destroy($id);
        // return redirect('admin.siswadanalumni.datasiswa.index')->with(['succes' => 'Data Siswa Berhasil Di Hapus']);
        return redirect()->route('data.guru')->with(['success' => 'Data Guru '.$request->id .'- Berhasil Di Hapus']);
    }

}
