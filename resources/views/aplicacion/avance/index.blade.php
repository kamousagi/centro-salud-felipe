@extends('layout.aplicacion')


@section('content')

<h5>Importar avance mensual</h5>
{!! Form::open(array('url' => '/avance/importar', 'method' => 'post', 'files' => true)) !!}
    <div class="form-group">
        {!! Form::file('archivo', ['class' => 'form-control']) !!}
        <button type="submit" class="btn btn-success">Importar</button>
    </div>
{!! Form::close() !!}

<h5>Avances mensuales disponibles</h5>

<table class="table table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th>asdf</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>asdf</td>
        </tr>
    </tbody>
</table>

<h5>Listado de importaciones</h5>

<table class="table table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <th>asdf</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>asdf</td>
        </tr>
    </tbody>
</table>

@endsection