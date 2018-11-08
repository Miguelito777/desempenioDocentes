<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TcTipoAspectoTecnico extends Model
{
    protected $table = "tc_tipo_aspecto_tecnico";
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_aspecto_tecnico'
    ];
    public function AspectosTecnicos()
    {
        return $this->hasMany('App\TcAspectoTecnico','id_tipo_acpecto_tecnico', 'id');
    }
        /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
