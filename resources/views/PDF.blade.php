@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel PDF</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Descripción: Quiero lograr que la barra lateral roja del PDF aparezca dinámicamente en todas las páginas, por ejemplo si el pdf tiene 5 páginas, que la barra lateral roja se incluya en las 5 páginas en vez de solo en la última página (actualmente sólo aparece en la última página).</p>
                   	<a href="{{ route('pdf.index') }}"><button class="btn btn-primary">Ver PDF</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection