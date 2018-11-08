<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TcAspectoTecnico extends Model
{
    protected $table = "tc_aspecto_tecnico";
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'aspecto_tecnico',
        'id_tipo_acpecto_tecnico'
    ];
        /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
