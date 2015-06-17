<?php

class TrabajoDetalladoController extends Controller {

	

	public function create(){	
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = Proyecto::ObtenerProyecto()->take(1)->get();
		return View::make('trabajodetallado/create',array('perfiles' => $perfiles,'proyectos'=>$proyectos));
	}

	public function store(){
		$data=array(
			'campo0'  => Input::get('campo0'),
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			'campo5'  => Input::get('campo5'),
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000|unique:trabajos_detallados,folio_proyecto',
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'required'	 => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'unique'	 => 'El folio ya ha sido registrado.'
		]);

		$validator = Validator::make($data, $rules,$messages);

		if($validator->passes()){
			if(Request::ajax()){

				$trabajodetallado                                  = new TrabajoDetallado;
				$trabajodetallado ->folio_proyecto                 = Input::get('campo0');
				$trabajodetallado ->plan_de_trabajo                = Input::get('campo1');
				$trabajodetallado ->desc_justificacion_actividades = Input::get('campo2');
				$trabajodetallado ->producto_etapa                 = Input::get('campo3');
				$trabajodetallado ->desc_etapas                    = Input::get('campo4');
				$trabajodetallado ->presupuesto                    = Input::get('campo5');
				$trabajodetallado ->save();
								
				return Response::json
	                                    ([
	                                        'success' => true,
	                                        'message' => 'El registro de esta sección fue todo un éxito.'
	                                    ]);  
			}else{

				/*$trabajodetallado                                  = new TrabajoDetallado;
				$trabajodetallado ->folio_proyecto                 = Input::get('campo0');
				$trabajodetallado ->plan_de_trabajo                = Input::get('campo1');
				$trabajodetallado ->desc_justificacion_actividades = Input::get('campo2');
				$trabajodetallado ->producto_etapa                 = Input::get('campo3');
				$trabajodetallado ->desc_etapas                    = Input::get('campo4');
				$trabajodetallado ->presupuesto                    = Input::get('campo5');
				$trabajodetallado ->save();*/
							
				return Redirect::to('proyectos/seccion/10')	
	         			->with('message_exito', 'Sección 10');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
										'success'    => false,
										'errors'     => $validator ->getMessageBag()->toArray(),
										'message'    => 'Revise los campos porfavor.',
										'validation' => 'El campo debe ser numérico'
                                    ]);
			 }else{

			 	return Redirect::to('proyectos/seccion/9')
        			->withErrors($validator)
                	->withInput();
			 }
			
		}
	}

	public function edit($folio_proyecto){
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = DB::table('proyectos')
                            ->join('trabajos_detallados',function($join)
                            {
                                $join->on('proyectos.folio','=','trabajos_detallados.folio_proyecto');
                            })
                            ->where('trabajos_detallados.folio_proyecto','=',$folio_proyecto)  
                            ->get();
                
                     
		return View::make('trabajodetallado/edit',array('perfiles' => $perfiles,'proyectos'=>$proyectos)); 
	}

	public function update(){
		$proyecto_folio = Input::get('campo0');

		$data=array(
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			'campo5'  => Input::get('campo5'),
			);

		$rules=array(
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'regex'      => 'El formato del campo es inválido',
		]);

		$validator = Validator::make($data, $rules,$messages);

		if($validator->passes()){
			if(Request::ajax()){
				DB::table('trabajos_detallados')
			            ->where('folio_proyecto','=', $proyecto_folio)
			            ->update(array(		
							'plan_de_trabajo'                => Input::get('campo1'),
							'desc_justificacion_actividades' => Input::get('campo2'),
							'producto_etapa'                 => Input::get('campo3'),
							'desc_etapas'                    => Input::get('campo4'),
							'presupuesto'                    => Input::get('campo5'),
							));
	
			
			return Response::json
                                    ([
										'success' => true,
										'message' => 'El registro de esta sección fue todo un éxito.',
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

	public function destroy(){

	}
}
