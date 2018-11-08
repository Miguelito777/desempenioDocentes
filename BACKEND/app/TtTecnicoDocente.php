<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TtTecnicoDocente extends Model
{
    protected $table = "tt_tecnico_docente";
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tecnico_docente',
        'anio_evaluacion',
        'id_aspecto_tecnico',
        'id_docente'
    ];
        /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
