<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisTecnicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analisis_tecnicos', function(Blueprint $table)
		{
			$table->engine ='InnoDB';
			//primary key
			$table->increments('id'); // id auto incremental primary key
			//Foreign Key
			$table->integer('folio_proyecto');
			$table->foreign('folio_proyecto')->references('folio')->on('proyectos')->onDelete('cascade');
			//Tuplas
			$table->text('antecedentes');
			$table->text('edo_tec_1');
			$table->text('edo_tec_2');
			$table->text('edo_tec_3');
			$table->text('edo_tec_4');
			$table->text('edo_tec_5');
			$table->text('origen_de_la_tecnologia'); 
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
		Schema::drop('analisis_tecnicos');
	}

}
