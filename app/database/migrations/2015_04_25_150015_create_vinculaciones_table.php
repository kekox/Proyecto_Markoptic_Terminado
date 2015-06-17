<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVinculacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vinculaciones', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); 
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->text('razones');
			$table->text('sinergias_marketing');
			$table->text('sinergias_tecnologias');
			$table->text('sinergias_produccion');
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
		Schema::drop('vinculaciones');
	}

}
