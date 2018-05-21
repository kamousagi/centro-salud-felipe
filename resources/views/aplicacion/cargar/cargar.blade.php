@extends('layout.aplicacion')


@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Cargar</li>
    </ol>
</nav>

{!! Form::open(array('url' => 'cargar_evaluacion/guardar', 'method' => 'post', 'files' => true)) !!}
    
<div class="card">
    <div class="card-header">
        Datos de carga de evaluación
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-1">
                <label>Año</label>
                {!! Form::selectRange('anio', 2017, date('Y'), null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-2">
                <label>Mes</label>
                {!! Form::select('animal', [
                    1 => 'Enero',
                    2 => 'Febrero',
            ], null, ['class' => 'form-control']) !!}
                
            </div>
            <div class="col-9">
                <label>Archivo</label>
                {!! Form::file('archivo', ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-success">Guardar <i class="fas fa-check-circle"></i></button>
        <a href="/evaluaciones" class="btn btn-danger">Cancelar <i class="fas fa-times-circle"></i></a>
    </div>

</div>

{!! Form::close() !!}

@endsection