@extends('layout.aplicacion')


@section('content')

{!! Form::open(array('url' => 'cargar/cargar', 'method' => 'post', 'files' => true)) !!}
    
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
        <a href="/cargar" class="btn btn-danger">Cancelar <i class="fas fa-times-circle"></i></a>
    </div>

</div>

{!! Form::close() !!}

@endsection