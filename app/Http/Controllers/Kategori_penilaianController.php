<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_penilaian;
use App\Models\Siswa; 

class Kategori_penilaianController extends Controller
{
    public function index()
    {   
        $kategori_penilaian = Kategori_penilaian::paginate(5);
        $siswa = Siswa::all();
        return view('admin.akademik.datakategoripenilaian.index',compact('kategori_penilaian','siswa'));
    }

    public function create()
    {   
        $kategori_penilaian = Kategori_penilaian::paginate(5);
        $siswa = Siswa::all();
        return view('admin.akademik.datakategoripenilaian.create',compact('kategori_penilaian','siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required',
            'kelas' => 'required',
            'disiplin' => 'required',
            'tanggung_jawab' => 'required',
            'teliti' => 'required',
            'kreatif' => 'required',
            'kerjasama' => 'required',
        ]);

        Kategori_penilaian::create(
            [
                'id_siswa' =>$request->id_siswa,
                'kelas' =>$request->kelas,
                'Disiplin' =>$request->disiplin,
                'tanggung_jawab' =>$request->tanggung_jawab,
                'teliti' =>$request->teliti,
                'kreatif' =>$request->kreatif,
                'kerjasama' =>$request->kerjasama,
            ]
        );
        return redirect()->route('data.katnilai')->with(['success' => 'Data Kategori Nilai No '.$request->id.'Berhasil Di Tambah']);

    }

    public function show($id)
    {
        $kategoripenilaian = Kategori_penilaian::find($id);
        $siswa = Siswa::find($id);
        return view('admin.akademik.datakategoripenilaian.show',compact('kategoripenilaian','siswa'));
    }

    public function edit($id)
    {
        $kategori_penilaian = Kategori_penilaian::find($id);
        $siswa = Siswa::all();
        return view('admin.akademik.datakategoripenilaian.edit',compact('kategori_penilaian','siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_siswa' => 'required',
            'kehadiran' => 'required',
            'kedisiplinan' => 'required',
            'prestasi' => 'required',
            'penampilan' => 'required',
        ]);

        Kategori_penilaian::where('id', $id)->update([
            'id_siswa' => $reqyest->id_siswa,
            'kehadiran' =>$request->kehadiran,
            'kedisiplinan' =>$request->kedisiplinan,
            'prestasi' =>$request->prestasi,
            'penampilan' =>$request->penampilan,
        ]);
        return redirect()->route('data.katnilai')->with(['success' => 'Data Kategori Nilai No '.$request->id.'Berhasil Di Update']);
    }

    public function destroy($id, Request $request)
    {
        Kategori_Penilaian::destroy($id);
        return redirect()->route('data.katnilai')->with(['success' => 'Data Kategori Nilai No '.$request->id .'- Berhasil Di Hapus']);
    }
}
