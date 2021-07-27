<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Siswa;
use App\Models\Entripenilaian;
use App\Models\Mapel;

class CetakController extends Controller
{
    public function index($id)
    {
        $nilaisiswa = Entripenilaian::find($id);
        $identitas = Siswa::find($id);
        return view('admin.akademik.entripenilaian.show',compact('nilaisiswa','identitas'));
    }

    public function cetakpdf($id)
        {
            $nilaisiswa = Entripenilaian::find($id);
            $identitas = Siswa::find($id);
            $pdf = PDF::loadView('pdf.cetaknilai',compact('nilaisiswa','identitas'));
            return $pdf->download('list-nilaii.pdf');
        }
}
