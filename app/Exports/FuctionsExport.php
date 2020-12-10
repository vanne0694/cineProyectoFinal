<?php

namespace App\Exports;

use App\fuction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class FuctionsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $fuctions = DB::table('fuctions')->select('Id', 'start', 'end', 'aviable', 'type')->get();
        return $fuctions;
    }
    public function headings():array{
        return[
            'Id',
            'Hora entrada',
            'Duracion',
            'Disponibilidad',
            'Tipo'
        ];
    }
}
