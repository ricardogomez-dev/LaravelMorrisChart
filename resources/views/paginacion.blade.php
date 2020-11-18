@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <p style="padding: 50px;">Descripción: Simple, quiero paginar los items de la tabla con ajax sin recargar la página de la manera más simple y limpia hablando en cuanto código.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabla_1" role="tab" aria-controls="home" aria-selected="true">Items</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabla_2" role="tab" aria-controls="profile" aria-selected="false">Finanzas</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tabla_1" role="tabpanel" aria-labelledby="home-tab">
                    <h5>Items</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Item</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td><button class="btn btn-primary btnAdd" idItem="{{$item->id}}">Agregar</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $items->links() }}
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabla_2" role="tabpanel" aria-labelledby="profile-tab">
                    <h5>Finanzas</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Item</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($finanzas as $finanza)
                                <tr>
                                    <td>{{ $finanza->id }}</td>
                                    <td>{{ $finanza->ingreso }}</td>
                                    <td><button class="btn btn-primary btnFinanza" idFinanza="{{$finanza->id}}">Agregar</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                    {{ $finanzas->links() }}
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.btnAdd').on('click', function(){
            
            var id = $(this).attr('idItem');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '/ajaxReq',
                type: 'POST',
                data: {_token: CSRF_TOKEN, id: id},
                dataType: 'JSON',
                success: function (data) {
                    alert(data.title);
                }
            }); 
        });
    });

    $(document).ready(function(){
        $('.btnFinanza').on('click', function(){
            
            var id = $(this).attr('idFinanza');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: '/ajaxReqFinanza',
                type: 'POST',
                data: {_token: CSRF_TOKEN, idFinanza: id},
                dataType: 'JSON',
                success: function (data) {
                    alert(data.ingreso);
                }
            }); 
        });
    });
    </script>
@endsection