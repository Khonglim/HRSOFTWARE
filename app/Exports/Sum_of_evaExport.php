<?php

namespace App\Exports;

use App\Sum_of_eva;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;

class Sum_of_evaExport implements FromCollection, WithHeadings
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sum_of_eva::all();
    }
     public function headings(): array
    {
        return [
            '#',
            'ผู้ถูกประเมิน',
            'ผู้ประเมิน',
            'คะแนนรวม',
            'แบบประเมิน',
            'การมองเห็น',
            'created_at',
            'updated_at',

        ];
    }
}
