<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    public $table = 'doctor';
    protected $primaryKey = 'iddoctor';
    public $timestamps = false;
}
