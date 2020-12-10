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
                                        (CASE WHEN DATE_FORMAT(created_at, '%m') = '01' THEN 'Ene' 
                                              WHEN DATE_FORMAT(created_at, '%m') = '02' THEN 'Feb'
                                              WHEN DATE_FORMAT(created_at, '%m') = '03' THEN 'Mar'
                                              WHEN DATE_FORMAT(created_at, '%m') = '04' THEN 'Abr'
                                              WHEN DATE_FORMAT(created_at, '%m') = '05' THEN 'May'
                                              WHEN DATE_FORMAT(created_at, '%m') = '06' THEN 'Jun'
                                              WHEN DATE_FORMAT(created_at, '%m') = '07' THEN 'Jul'
                                              WHEN DATE_FORMAT(created_at, '%m') = '08' THEN 'Ago'
                                              WHEN DATE_FORMAT(created_at, '%m') = '09' THEN 'Sep'
                                              WHEN DATE_FORMAT(created_at, '%m') = '10' THEN 'Oct'
                                              WHEN DATE_FORMAT(created_at, '%m') = '11' THEN 'Nov'
                                              WHEN DATE_FORMAT(created_at, '%m') = '12' THEN 'Dec' END) as fec,
                                        SUM(ingreso) as ing, 
                                        SUM(gasto) as gas,
                                        (SUM(ingreso) - SUM(gasto)) as util 
                                    FROM `finanzas`
                                    GROUP BY created_at
                                    ORDER BY created_at ASC"));

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
