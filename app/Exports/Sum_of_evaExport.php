<?php

namespace App\Exports;

use App\Sum_of_eva;
use Maatwebsite\Excel\Concerns\FromCollection;

class Sum_of_evaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sum_of_eva::all();
    }
}
