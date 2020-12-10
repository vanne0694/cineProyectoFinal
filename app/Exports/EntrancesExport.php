<?php

namespace App\Exports;

use App\entrance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class EntrancesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $entrances = DB::table('entrances')->select('Id', 'price', 'hourEntrance')->get();
        return $entrances;
    }
    public function headings():array{
        return[
            'Id',
            'Precio',
            'Hora de entrada'
        ];
    }
}
