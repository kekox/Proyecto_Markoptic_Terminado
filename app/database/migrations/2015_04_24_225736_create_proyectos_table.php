<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyectos', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->integer('folio')->primary();
			//Foreign Key
			$table->integer('id_user')->unsigned();
			$table->foreign('id_user')
			->references('id')
			->on('users');
			

			//Tuplas
			$table->text('nombre_proyecto');
            $table->text('modalidad', 50);
            $table->text('tipo_de_proyecto',50);
            $table->text('contextualizacion',255);
            $table->text('propuesta');
            $table->text('area_industrial');
            $table->text('area_conocimiento');
            $table->text('palabras_clave');
            $table->text('descripcion_innovacion');
            $table->text('tipo_innovacion');
            $table->text('grado_innovacion');
            $table->text('tipo_mercado');
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
		Schema::drop('proyectos');
	}

}
