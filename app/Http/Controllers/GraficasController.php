<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;
use App\Consumable;
use App\Room;
use App\entrance;
use App\fuction;
use Illuminate\Support\Facades\DB;

class GraficasController extends Controller
{
    public function graficaMovies(){
        $movies = movies::select(DB::raw("COUNT(*) as count"))->whereName('created_at', 
        date('Y'))->groupBy(DB::raw("month(created_at)"))->pluck('count');
        return view('graficas.graficaMovies', compact('movies'));
    }

   
    public function graficaConsumables(){
        $consumables = consumable::select(DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Q'))->groupBy(DB::raw("day(created_at)"))->pluck('count');
        return view('graficas.graficaConsumables', compact('consumables'));
    }

    public function graficaRooms(){
        $rooms = Room::select(DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('C'))->groupBy(DB::raw("month(created_at)"))->pluck('count');
        return view('graficas.graficaRooms', compact('rooms'));
    }

    public function graficaEntrances(){
        $entrances = Entrance::select(DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('P'))->groupBy(DB::raw("day(created_at)"))->pluck('count');
        return view('graficas.graficaEntrances', compact('entrances'));
    }

    public function graficaFuctions(){
        $fuctions = Fuction::select(DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('A'))->groupBy(DB::raw("month(created_at)"))->pluck('count');
        return view('graficas.graficaFuctions', compact('fuctions'));
    }
}
?>