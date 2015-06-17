<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMercadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mercados', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); // id auto incremental primary key
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->text('mercado');
			$table->text('modelo_de_negocio');
			$table->double('precio');
			$table->text('proyecciones');
			$table->text('enfoque_de_insercion');
			$table->text('cliente_objetivo');
			$table->text('beneficios');
			$table->text('competencia');
			$table->text('patentes_similares');
			$table->text('barreras');
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
		Schema::drop('mercados');
	}

}
