<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TcActitudinalDocente extends Model
{
    protected $table = "tt_actitudinal_docente";
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'actitudinal_docente',
        'anio_evaluacion',
        'id_aspecto_actitudinal',
        'id_docente'
    ];
        /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
