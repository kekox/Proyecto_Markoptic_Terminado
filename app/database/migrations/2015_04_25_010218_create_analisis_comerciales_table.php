<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisComercialesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analisis_comerciales', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); 
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->text('caracteristicas_empresa');
			$table->text('funciones_criticas');
			$table->text('experiencia_personal');
			$table->text('record_de_exito'); 
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
		Schema::drop('analisis_comerciales');
	}

}
