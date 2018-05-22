<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use XBase\Table;

class CargarController extends Controller
{
    public function getIndex()
    {
        return view('aplicacion.cargar.index');
    }

    public function postCargar(Request $solicitud)
    {
        $archivo = $solicitud->file('archivo');

        //$table = new Table(dirname(__FILE__).'/test.dbf');
        //$table = new Table($archivo->getClientOriginalName());
        var_dump($archivo->getClientOriginalName());
        var_dump($archivo->getFilename());
        var_dump($archivo->getPath());
        $direccion = $archivo->getPath().'\\'.$archivo->getFilename();
        $table = new Table($archivo);

        while ($record = $table->nextRecord()) {
            echo "hola ";
        }

        return view('aplicacion.cargar.index');
    }

}

?>