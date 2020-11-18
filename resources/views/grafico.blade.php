@extends('layouts.app')

@section('page-css')
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gráfico Dinámico | Morris.js </div>
                <div class="card-body">
                   	<div id="area-example" style="height: 400px;"></div>
                    <p>Descripción: Quiero lograr incluir dinámicamente 3 datos: La suma de 1- Ingresos, 2- Gastos y 3- Utilidades de los últimos 6 meses. Es decir sumar por ejemplo todos los ingresos de Octubre y así sucesivamente con los 6 meses anteriores con los 3 tipos que quiero calcular (ingresos, gastos, utilidades).</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('page-js')
    <script>
        new Morris.Area({
          element: 'area-example',
          data: [
            { y: '2006', a: 10, b: 9, c: 45 },
            { y: '2007', a: 75,  b: 65, c: 45 },
            { y: '2008', a: 50,  b: 40, c: 45 },
            { y: '2009', a: 75,  b: 65, c: 45 },
            { y: '2010', a: 50,  b: 40, c: 45 },
            { y: '2011', a: 75,  b: 65, c: 45 },
            { y: '2012', a: 10, b: 9, c: 45 }
          ],
          xkey: 'y',
          ykeys: ['a', 'b', 'c'],
          labels: ['Ingresos', 'Gastos', 'Utilidad']
        });
    </script>
@stop