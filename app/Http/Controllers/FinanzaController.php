<?php

namespace App\Http\Controllers;

use App\Finanza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select(DB::raw("SELECT 
                                        DATE_FORMAT(created_at, '%Y-%m') as fec,
                                        SUM(ingreso) as ing, 
                                        SUM(gasto) as gas,
                                        (SUM(ingreso) - SUM(gasto)) as util 
                                    FROM `finanzas`
                                    GROUP BY fec
                                    ORDER BY fec ASC"));

        return view('grafico', compact('data'));
    }

    /*     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Finanza  $finanza
     * @return \Illuminate\Http\Response
     */
    public function show(Finanza $finanza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Finanza  $finanza
     * @return \Illuminate\Http\Response
     */
    public function edit(Finanza $finanza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Finanza  $finanza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finanza $finanza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Finanza  $finanza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finanza $finanza)
    {
        //
    }
}
