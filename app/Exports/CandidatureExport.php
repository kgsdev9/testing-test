<?php

namespace App\Exports;

use App\Models\Candidature;
use Maatwebsite\Excel\Concerns\FromCollection;

class CandidatureExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Candidature::all();
    }
}
