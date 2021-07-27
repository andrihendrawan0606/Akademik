<?php

namespace App\Exports;

use App\Models\Entripenilaian;
use Maatwebsite\Excel\Concerns\FromCollection;

class EntrinilaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Entripenilaian::all();
    }
}
