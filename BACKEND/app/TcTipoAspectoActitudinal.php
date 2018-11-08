<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TcTipoAspectoActitudinal extends Model
{
    protected $table = "tc_tipo_aspecto_actitudinal";
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_aspecto_actitudinal'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
