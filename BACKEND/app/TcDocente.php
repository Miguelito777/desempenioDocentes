<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TcDocente extends Model
{
    protected $table = "tc_docente";
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres',
        'apellidos',
        'apellido_casada',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'direccion',
        'estado_civil',
        'genero',
        'dpi',
        'nit',
        'telefono',
        'correo_electronico',


        'titulo_nivel_medio',
        'no_registro',
        'titulo_universitario',
        'otros_titulos',
        'estudios_actuales',
        'capacitaciones_educativas',
        'registro_escalafonario',
        'nivel',
        'AreaProfecional',
        'clase',
        'folleto',
        'dominio_idiomas',

        'titulo_puesto',
        'cargo_desempenio',
        'tipo_contrato',
        'partida_presupuestaria',
        'establecimiento_labora',
        'jornada',
        'AreaPuesto',
        'movilidad',
        'fecha_toma',
        'acta',
        'libro',
        'folio',
        'reubicado_en',
        'grado',
        'cantidad_ninios',
        'cantidad_ninias',
        'experiencia_laboral',
    ];
        /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
