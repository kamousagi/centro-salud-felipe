<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DbfContenido;

class Dbf extends Model
{
    protected $table = 'Dbf';
    public $timestamps = false;
    public $primaryKey = "id_dbf";
    
    public function contenido()
    {
        return $this->hasMany('App\DbfContenido', 'id_dbf');
    }
}