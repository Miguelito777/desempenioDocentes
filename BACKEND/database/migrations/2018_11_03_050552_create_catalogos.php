<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_docente', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombres', '88');
            $table->string('apellidos', '88');
            $table->string('apellido_casada', '88');
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento','88');
            $table->string('direccion','80');
            $table->string('estado_civil','18');
            $table->string('genero','8');
            $table->string('dpi','18');
            $table->string('nit','18');
            $table->string('telefono','8');
            $table->string('correo_electronico');


            $table->string('titulo_nivel_medio','88');
            $table->string('no_registro','8');
            $table->string('titulo_universitario','88');
            $table->string('otros_titulos','888');
            $table->string('estudios_actuales','888');
            $table->string('capacitaciones_educativas','888');
            $table->string('registro_escalafonario','8');
            $table->string('nivel','8');
            $table->string('AreaProfecional','8');
            $table->string('clase','8');
            $table->string('folleto','8');
            $table->string('dominio_idiomas','888');

            $table->string('titulo_puesto','80');
            $table->string('cargo_desempenio','80');
            $table->string('tipo_contrato','80');
            $table->string('partida_presupuestaria','80');
            $table->string('establecimiento_labora','80');
            $table->string('jornada','80');
            $table->string('AreaPuesto','80');
            $table->string('movilidad','80');
            $table->string('fecha_toma','80');
            $table->string('acta','80');
            $table->string('libro','80');
            $table->string('folio','80');
            $table->string('reubicado_en','80');
            $table->string('grado','80');
            $table->string('cantidad_ninios','80');
            $table->string('cantidad_ninias','80');
            $table->string('experiencia_laboral','80');
            
            $table->timestamps();
        });

        Schema::create('tc_tipo_aspecto_tecnico', function(Blueprint $table){
            $table->increments('id');
            $table->string('tipo_aspecto_tecnico');
            $table->timestamps();
        });

        Schema::create('tc_aspecto_tecnico', function(Blueprint $table){
            $table->increments('id');
            $table->string('aspecto_tecnico');
            $table->unsignedInteger('id_tipo_acpecto_tecnico');
            $table->foreign('id_tipo_acpecto_tecnico')->references('id')->on('tc_tipo_aspecto_tecnico');
            $table->timestamps();
        });

        Schema::create('tt_tecnico_docente', function(Blueprint $table){
            $table->increments('id');
            $table->string('tecnico_docente');
            $table->string('anio_evaluacion');
            $table->unsignedInteger('id_aspecto_tecnico');
            $table->foreign('id_aspecto_tecnico')->references('id')->on('tc_aspecto_tecnico');
            $table->unsignedInteger('id_docente');
            $table->foreign('id_docente')->references('id')->on('tc_docente');
            $table->timestamps();
        });

        Schema::create('tc_tipo_aspecto_actitudinal', function(Blueprint $table){
            $table->increments('id');
            $table->string('tipo_aspecto_actitudinal');
            $table->timestamps();
        });

        Schema::create('tt_actitudinal_docente', function(Blueprint $table){
            $table->increments('id');
            $table->string('actitudinal_docente');
            $table->string('anio_evaluacion');
            $table->unsignedInteger('id_aspecto_actitudinal');
            $table->foreign('id_aspecto_actitudinal')->references('id')->on('tc_tipo_aspecto_actitudinal');
            $table->unsignedInteger('id_docente');
            $table->foreign('id_docente')->references('id')->on('tc_docente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('tc_docente');
        Schema::dropIfExist('tc_tipo_aspecto_tecnico');
        Schema::dropIfExist('tc_aspecto_tecnico');
        Schema::dropIfExist('tt_tecnico_docente');
        Schema::dropIfExist('tc_tipo_aspecto_actitudinal');
        Schema::dropIfExist('tt_actitudinal_docente');
    }
}
