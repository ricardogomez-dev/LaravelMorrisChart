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
        $data = \DB::table('finanzas')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('sum(ingreso) as ingresos'))
            ->groupBy(DB::raw('MONTH(created_at)') )
            ->get()->toJSON();

        return view('grafico', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
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
