<!DOCTYPE html>
<html>
<head>
    <title>Cotizacion</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,200&display=swap');

header,
footer {
    width: 100%;
    text-align: center;
    position: fixed;
}
header {
    top: 0px;
}
footer {
    left:-400px;
    bottom: 80px;
}

.contenido{
    margin-left:7%;
    width: 50%;
    float:left;
    padding: 0px !important;
}
.contenido p{
    font-size:80px;
    color: black;
    font-family: 'Great Vibes' !important;
    margin:0px;
    padding: 0px;
}
.barra{
    width: 500px;
    height:6px;
    background-color: #A7C4CC;
    margin:20px 0px !important;
}

.container{
    position: fixed;
    transform:rotate(-90deg);
    margin-left: 23px;
    text-align: right;
    margin-top: 363px;
    width: 160%;
    height: 180px;
    background-color: #A7C4CC;
    color:white; 
}
.container p{
    margin-right: 17%;
    margin-top:0%;
    font-size: 80px;
    font-family: 'Great Vibes' !important;
    padding: 0px;
}

table{
    font-family: 'Montserrat', sans-serif;
}

table.tabla{
    width: 488px;
}

table.tabla tr td{
    text-align: left;
    font-size: 18px;
}

table.tabla tr th{
    font-weight: bold !important;
    text-align: left;
}

table.totals{
    width: 502px;
}

table.totals tr td{
    text-align: right;
    padding: 3px 12px;
    font-size: 18px;
}

table.totals tr td:first-child{
    text-transform: uppercase;
    width: 358px;
}

table.totals tr td:last-child{
    text-align: left !important;
}
</style>
<body>
<div class="container">
        <p>Shabbyshop</p>
    </div>
    <div class="contenido">
        <p>Cotizacion</p>
        <table class="tabla">
            <tr>
                <td colspan="4">
                    <div class="barra"></div>
                </td>
            </tr>
            <tr>
                <th>Producto</th>
                <th>Coste Unitario</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="barra"></div>
                </td>
            </tr>
            @php
                $subtotal = 0;
                $discount = 0;
                $total = 0;

            @endphp
            @foreach($data as $d)
                @php $subtotal+=($d['unit_price'] * $d['qty']) @endphp
            <tr>
                <td>{{ $d['product'] }}</td>
                <td>${{ money_format('%i',$d['unit_price']) }}</td>
                <td>{{ $d['qty'] }}</td>
                <td>${{ money_format('%i',($d['unit_price'] * $d['qty'])) }}</td>
            </tr>
            @endforeach
            @php 
                $discount = (($subtotal * 10) / 100);
                $total = $subtotal - $discount;
            @endphp
            <tr>
                <td colspan="4">
                    <div class="barra"></div>
                </td>
            </tr>
        </table>

        <table class="totals">
            <tr>
                <td>subtotal:</td>
                <td>${{ money_format('%i',$subtotal) }}</td>
            </tr>
            <tr>
                <td>descuento 10%:</td>
                <td>${{ money_format('%i',$discount) }}</td>
            </tr>
            <tr>
                <td><b>total:</b></td>
                <td>${{ money_format('%i',$total) }}</td>
            </tr>
        </table>
</body>
</html>