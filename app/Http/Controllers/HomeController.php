<?php

namespace App\Http\Controllers;

use PDF;
use App\Item;
use App\Finanza;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pdf()
    {
        $items = Item::get();

        $data = [
            [
                'product' => 'Agua Minalba',
                'unit_price' => 1000,
                'qty' => 1
            ],
            [
                'product' => 'Caja de Aceite',
                'unit_price' => 1500,
                'qty' => 10
            ]
        ];

        
        $pdf = \PDF::loadView('PDF-VIEW', compact('items','data'));
        return $pdf->stream();
    }

    public function ajaxReq(Request $request)
    {
        $response = Item::find($request->id);
        return response()->json($response); 
    }

    public function ajaxReqFinanza(Request $request)
    {
        $response = Finanza::find($request->idFinanza);
        return response()->json($response); 
    }
}
