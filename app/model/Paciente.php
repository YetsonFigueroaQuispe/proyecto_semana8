<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    public $table = 'paciente';
    protected $primaryKey = 'idpaciente';
    public $timestamps = false;
}
