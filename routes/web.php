<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// #1 - PDF.

Route::get('/pdf', function(){
	return view('PDF');
});
Route::get('/ver-pdf', 'HomeController@pdf')->name('pdf.index');

// #2 - Paginación Ajax.

Route::get('/paginacion-ajax', function(){
	$items = App\Item::paginate(5);
	$finanzas = App\Finanza::paginate(5);
	return view('paginacion', [
		'items' => $items,
		'finanzas' => $finanzas
	]);
});

Route::post('/ajaxReq', 'HomeController@ajaxReq');
Route::post('/ajaxReqFinanza', 'HomeController@ajaxReqFinanza');

// #3 - Gráfico Morris Area Chart.

Route::get('/charts', 'FinanzaController@index');

// Otros.

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
