<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescripcionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('descripciones', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); 
			//Foreign Key
			$table->integer('folio_proyecto')->unique();
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->text('descripcion_propuesta');
			$table->text('principales_actividades');
			$table->text('principales_entregables');
			$table->text('objetivo_gral');
			$table->text('resultados_esperados');
			$table->text('descripcion_estrategica_tec');
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
		Schema::drop('descripciones');
	}

}
