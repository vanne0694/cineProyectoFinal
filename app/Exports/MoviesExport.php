<?php

namespace App\Exports;

use App\movies;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
//use DB;
use Illuminate\Support\Facades\DB;


class MoviesExport implements FromCollection, 
WithHeadings{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $movies = DB::table('movies')->select('Id', 'name', 'synopsis', 'category', 
        'genre', 'duracion')->get();
        return $movies;
    }
    public function headings():array{
        return[
            'Id',
            'Nombre',
            'Sinopsis',
            'Categoria',
            'Genero',
            'Duracion'
        ];
    }
}
