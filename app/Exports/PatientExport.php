<?php

namespace App\Exports;

use App\Patients;
use Maatwebsite\Excel\Concerns\FromCollection;

class PatientExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Patients::all();
    }
}
