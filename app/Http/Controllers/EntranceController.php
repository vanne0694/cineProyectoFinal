<?php

namespace App\Http\Controllers;

use App\entrance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use\App\Exports\EntrancesExport;
use App\fuction;
use Barryvdh\DomPDF\Facade as PDF;

class EntranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrances = DB::table('entrances')->paginate(2);
        return view('entrances.index', compact('entrances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entrances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'hourEntrance' => 'required'
        ]);
        entrance::create($request->all());

        return redirect()->route('entrances.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entrance  $entrance
     * @return \Illuminate\Http\Response
     */
    public function show(entrance $entrance)
    {
        return view('entrances.show', compact('entrance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entrance  $entrance
     * @return \Illuminate\Http\Response
     */
    public function edit(entrance $entrance)
    {
        return view('entrances.edit', compact('entrance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entrance  $entrance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entrance $entrance)
    {
        $request->validate([
            'price' => 'required',
            'hourEntrance' => 'required'
        ]);
        $entrance->update($request->all());

        return redirect()->route('entrances.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entrance  $entrance
     * @return \Illuminate\Http\Response
     */
    public function destroy(entrance $entrance)
    {
        $entrance->delete();
        return redirect()->route('entrances.index');
    }
    public function exportToXls(){
        return Excel::download(new EntrancesExport, 'entrances.xlsx');
    }
    public function exportToCsv(){
        return Excel::download(new EntrancesExport, 'entrances.csv');
    }
    public function exportToPDF(){
        $entrances = entrance::get();
        $pdf = PDF::loadView('entrances.exportToPDF', compact('entrances'));
        return $pdf->download('entrances.pdf');
    }
}
