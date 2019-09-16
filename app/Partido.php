<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model{
    protected $table = "partidos";
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'codigo',
        'estado',
    ];
}
