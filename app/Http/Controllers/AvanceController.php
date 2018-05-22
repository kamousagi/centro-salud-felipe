<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use XBase\Table;

class AvanceController extends Controller
{
    public function getIndex()
    {
        return view('aplicacion.avance.index');
    }

    public function postImportar(Request $solicitud)
    {
        $archivo = $solicitud->file('archivo');

        $direccion = $archivo->getPath().'\\'.$archivo->getFilename();
        $table = new Table($archivo);
        //, array('COD_2000', 'ANO', 'MES', 'NOM_LOTE', 'NUM_PAG', 'NUM_REG', 'DIA', 'FICHAFAM')

        while ($record = $table->nextRecord()) {
            //echo var_dump($record->COD_2000);
            //echo var_dump($record->getChar('COD_2000'));
            echo var_dump($record->getChar('COD_2000,C,9'));
        }

        return view('aplicacion.avance.index');
    }

}

?>