<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instituciones', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); 
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->text('registro');
			$table->text('equipamento');
			$table->text('diseño_o_prototipo');
			$table->text('realizaciones');
			$table->text('escalamiento_piloto');
			$table->text('grupo_trabajo_vinculacion');
			$table->text('esquema');
			$table->text('descripcion_actividades');
			$table->text('entregables');
			$table->text('descripcion_participacion');
			$table->text('informacion_contacto');
			$table->text('grupo_de_trabajo');
			$table->text('grado_academico');
			$table->text('producto');
			$table->text('informacion_participante');
			$table->text('actividades_especificos');
			//Created_at & Updated_at
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
		Schema::drop('instituciones');
	}

}
