<?php

namespace App;

use App\Evaluacion;
use Illuminate\Database\Eloquent\Model;

class DbfContenido extends Model
{
    protected $table = 'dbf_contenido';
    public $timestamps = false;
    public $primaryKey = "id_dbf_contenido";

    public function dbf()
    {
        return $this->belongsTo('App\Dbf', 'id_dpf');
    }
}