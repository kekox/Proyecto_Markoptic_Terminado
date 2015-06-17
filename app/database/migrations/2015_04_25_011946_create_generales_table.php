<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('generales', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); // id auto incremental primary key
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->text('nivel_de_tecnologia');
			$table->text('nivel_de_innovacion');
			$table->text('riesgo_tecnico');
			$table->text('principal_resultado');
			$table->text('presupuesto_de_proyecto');
			$table->text('administracion_del_proyecto');
			$table->text('disponibilidad_y_compatibilidad');
			$table->text('plan_de_proteccion');
			$table->text('generacion_de_ingresos');
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
		Schema::drop('generales');
	}

}
