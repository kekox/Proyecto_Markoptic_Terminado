<?php

class ProyectoController extends Controller {

	

	public function create()
	{	
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('proyectos/create2',array('perfiles' => $perfiles));
	}

	public function dashboard($folio_proyecto){
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = Proyecto::where('folio','=',$folio_proyecto)->get();

		$descripciones = DB::table('proyectos')
                            ->join('descripciones',function($join)
                            {
                                $join->on('proyectos.folio','=','descripciones.folio_proyecto');
                            })
                            ->where('descripciones.folio_proyecto','=',$folio_proyecto)  
                            ->get();

        $analisistecnicos = DB::table('proyectos')
                            ->join('analisis_tecnicos',function($join)
                            {
                                $join->on('proyectos.folio','=','analisis_tecnicos.folio_proyecto');
                            })
                            ->where('analisis_tecnicos.folio_proyecto','=',$folio_proyecto)  
                            ->get();

        $analisiscomerciales = DB::table('proyectos')
                            ->join('analisis_comerciales',function($join)
                            {
                                $join->on('proyectos.folio','=','analisis_comerciales.folio_proyecto');
                            })
                            ->where('analisis_comerciales.folio_proyecto','=',$folio_proyecto)  
                            ->get();

        $generales = DB::table('proyectos')
                            ->join('generales',function($join)
                            {
                                $join->on('proyectos.folio','=','generales.folio_proyecto');
                            })
                            ->where('generales.folio_proyecto','=',$folio_proyecto)  
                            ->get();

        $mercados = DB::table('proyectos')
                            ->join('mercados',function($join)
                            {
                                $join->on('proyectos.folio','=','mercados.folio_proyecto');
                            })
                            ->where('mercados.folio_proyecto','=',$folio_proyecto)  
                            ->get();

        $vinculaciones = DB::table('proyectos')
                            ->join('vinculaciones',function($join)
                            {
                                $join->on('proyectos.folio','=','vinculaciones.folio_proyecto');
                            })
                            ->where('vinculaciones.folio_proyecto','=',$folio_proyecto)  
                            ->get();

        $trabajosdetallados = DB::table('proyectos')
                            ->join('trabajos_detallados',function($join)
                            {
                                $join->on('proyectos.folio','=','trabajos_detallados.folio_proyecto');
                            })
                            ->where('trabajos_detallados.folio_proyecto','=',$folio_proyecto)  
                            ->get();
        $asesorias = DB::table('proyectos')
                            ->join('asesorias',function($join)
                            {
                                $join->on('proyectos.folio','=','asesorias.folio_proyecto');
                            })
                            ->where('asesorias.folio_proyecto','=',$folio_proyecto)  
                            ->get();

        if(!$proyectos->isEmpty()){
        	return View::make('proyectos/dashboard2',array('perfiles' => $perfiles,'proyectos'=>$proyectos,
						'descripciones'=>$descripciones,
						'analisistecnicos'=>$analisistecnicos,
						'analisiscomerciales'=>$analisiscomerciales,
						'generales'=>$generales,
						'mercados'=> $mercados,
						'vinculaciones'=>$vinculaciones,
						'trabajosdetallados'=>$trabajosdetallados,
						'asesorias'=>$asesorias));
        }else{
        	return Response::view('error.error404',array(),404);
        }
                            
	}



	public function store()
	{
		$data=array(
			'campo0'  => Input::get('campo0'),
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			'campo5'  => Input::get('campo5'),
			'campo6'  => Input::get('campo6'),
			'campo7'  => Input::get('campo7'),
			'campo8'  => Input::get('campo8'),
			'campo9'  => Input::get('campo9'),
			'campo10' => Input::get('campo10'),
			'campo11' => Input::get('campo11'),
			'campo12' => Input::get('campo12'),
			);


		$rules=array(
			'campo0'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo1'  => 'required|numeric|min:1|max:1000000|',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo6'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo7'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo8'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo9'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo10' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo11' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo12' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'required'	 => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado',
			]);

		$validator = Validator::make($data, $rules,$messages);

		if($validator->passes()){
			if(Request::ajax()){
			$proyecto                         = new Proyecto;
			$proyecto->folio                  = Input::get('campo1');
			$proyecto->id_user                = Auth::user()->id;
			$proyecto->nombre_proyecto        = Input::get('campo0');
			$proyecto->modalidad              = Input::get('campo2');
			$proyecto->tipo_de_proyecto       = Input::get('campo3');
			$proyecto->contextualizacion      = Input::get('campo4');
			$proyecto->propuesta              = Input::get('campo5');
			$proyecto->area_industrial        = Input::get('campo6');
			$proyecto->area_conocimiento      = Input::get('campo7');
			$proyecto->palabras_clave         = Input::get('campo8');
			$proyecto->descripcion_innovacion = Input::get('campo9');
			$proyecto->tipo_innovacion        = Input::get('campo10');
			$proyecto->grado_innovacion       = Input::get('campo11');
			$proyecto->tipo_mercado           = Input::get('campo12');
			$proyecto->save();

			$descripciones 	= new Descripcion;
			$descripciones->folio_proyecto 	 = Input::get('campo1');
			$descripciones->save();

			$tecnicos = new AnalisisTecnico;
			$tecnicos->folio_proyecto = Input::get('campo1');
			$tecnicos->save();

			$comerciales = new AnalisisComercial;
			$comerciales->folio_proyecto = Input::get('campo1');
			$comerciales->save();

			$generales = new General;
			$generales->folio_proyecto = Input::get('campo1');
			$generales->save();

			$mercados = new Mercado;
			$mercados->folio_proyecto = Input::get('campo1');
			$mercados->save();

			$vinculaciones = new Vinculacion;
			$vinculaciones->folio_proyecto = Input::get('campo1');
			$vinculaciones->save();

			$instituciones = new Institucion;
			$instituciones->folio_proyecto = Input::get('campo1');
			$instituciones->save();

			$trabajosdetallados = new TrabajoDetallado;
			$trabajosdetallados->folio_proyecto = Input::get('campo1');
			$trabajosdetallados->save(); 

			$asesorias = new Asesoria;
			$asesorias->folio_proyecto = Input::get('campo1');
			$asesorias->save(); 

			
			return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'El registro de esta sección fue todo un éxito.'
                                    ]);  
			}else{
			/*$proyecto                         = new Proyecto;
			$proyecto->folio                  = Input::get('campo1');
			$proyecto->id_user                = Auth::user()->id;
			$proyecto->nombre_proyecto        = Input::get('campo0');
			$proyecto->modalidad              = Input::get('campo2');
			$proyecto->tipo_de_proyecto       = Input::get('campo3');
			$proyecto->contextualizacion      = Input::get('campo4');
			$proyecto->propuesta              = Input::get('campo5');
			$proyecto->area_industrial        = Input::get('campo6');
			$proyecto->area_conocimiento      = Input::get('campo7');
			$proyecto->palabras_clave         = Input::get('campo8');
			$proyecto->descripcion_innovacion = Input::get('campo9');
			$proyecto->tipo_innovacion        = Input::get('campo10');
			$proyecto->grado_innovacion       = Input::get('campo11');
			$proyecto->tipo_mercado           = Input::get('campo12');
			$proyecto->save();*/
			
			return Redirect::to('proyectos/seccion/2')	
         			->with('message_exito', 'Sección 2');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
										'success' => false,
										'errors'  => $validator ->getMessageBag()->toArray(),
										'message' => 'Revise los campos porfavor.',
										'message2'=> 'Folio existente. Seleccionar otro # de folio.'
                                    ]);
			 }else{

			 	return Redirect::to('proyectos/seccion/1')
        			->withErrors($validator)
                	->withInput();
			 }
			
		}
		

	}


	public function edit($folio){
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = DB::table('proyectos')->where('folio', '=', $folio)->get();
		return View::make('proyectos/edit2',array('perfiles' => $perfiles,'proyectos'=>$proyectos));  

		
	}

	public function update(){
		$proyecto_folio = Input::get('campo1');
		

		$data=array(
			'campo0'  => Input::get('campo0'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			'campo5'  => Input::get('campo5'),
			'campo6'  => Input::get('campo6'),
			'campo7'  => Input::get('campo7'),
			'campo8'  => Input::get('campo8'),
			'campo9'  => Input::get('campo9'),
			'campo10' => Input::get('campo10'),
			'campo11' => Input::get('campo11'),
			'campo12' => Input::get('campo12'),
			);


		$rules=array(
			'campo0'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo6'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo7'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo8'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo9'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo10' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo11' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo12' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);
		
		$messages=([
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'campo0.min' => 'El tamaño del campo debe ser de al menos :min número.',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado',
			]);

		$validator = Validator::make($data, $rules,$messages);

		if($validator->passes()){
			if(Request::ajax()){
				DB::table('proyectos')
			            ->where('folio','=', $proyecto_folio)
			            ->update(array(
							'nombre_proyecto'        => Input::get('campo0'),
							'modalidad'              => Input::get('campo2'),
							'tipo_de_proyecto'       => Input::get('campo3'),
							'contextualizacion'      => Input::get('campo4'),
							'propuesta'              => Input::get('campo5'),
							'area_industrial'        => Input::get('campo6'),
							'area_conocimiento'      => Input::get('campo7'),
							'palabras_clave'         => Input::get('campo8'),
							'descripcion_innovacion' => Input::get('campo9'),
							'tipo_innovacion'        => Input::get('campo10'),
							'grado_innovacion'       => Input::get('campo11'),
							'tipo_mercado'           => Input::get('campo12')
							));
	
			
			return Response::json
                                    ([
										'success' => true,
										'message' => 'El registro de esta sección fue todo un éxito.',
										'dada' => $proyecto_folio,
                                    ]);  
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
										'success' => false,
										'errors'  => $validator ->getMessageBag()->toArray(),
										'message' => 'Revise los campos porfavor.',
										'message2'=> 'Folio existente. Seleccionar otro # de folio.'
                                    ]);
			 }
			
		}



	}

	public function destroy($proyecto_folio){

		DB::table('proyectos')->where('folio', '=', $proyecto_folio)->delete();
        return Redirect::to('proyectos')
            ->with('message_delete','Proyecto Eliminado Correctamente');
	}

	public function stop($proyecto_folio){
		DB::table('proyectos')->where('folio', '=', $proyecto_folio)->delete();
        return Redirect::to('proyectos')
            ->with('message_cancel','Proceso cancelado');
	}
}
