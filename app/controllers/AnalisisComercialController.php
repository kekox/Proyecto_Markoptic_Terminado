<?php

class AnalisisComercialController extends Controller {

	

	public function create(){	
		
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('analisiscomercial/create',array('perfiles' => $perfiles));
	}

	public function store(){
		
		$data=array(
			'campo0'  => Input::get('campo0'),
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000|unique:analisis_comerciales,folio_proyecto',
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'required'	 => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'unique'	 => 'El folio ya ha sido registrado'
		]);

		$validator = Validator::make($data, $rules, $messages);
		if($validator->passes()){
			if(Request::ajax())
			{
				$analisiscomercial                          = new AnalisisComercial;
				$analisiscomercial->folio_proyecto          = Input::get('campo0');
				$analisiscomercial->caracteristicas_empresa = Input::get('campo1');
				$analisiscomercial->funciones_criticas      = Input::get('campo2');
				$analisiscomercial->experiencia_personal    = Input::get('campo3');
				$analisiscomercial->record_de_exito         = Input::get('campo4');
				$analisiscomercial->save();


					
				return Response::json
                                    ([
										'success' => true,
										'message' => 'El registro de esta sección fue todo un éxito.'
                                    ]);  
			}else{
				/*$analisiscomercial                          = new AnalisisComercial;
				$analisiscomercial->folio_proyecto          = Input::get('campo0');
				$analisiscomercial->caracteristicas_empresa = Input::get('campo1');
				$analisiscomercial->funciones_criticas      = Input::get('campo2');
				$analisiscomercial->experiencia_personal    = Input::get('campo3');
				$analisiscomercial->record_de_exito         = Input::get('campo4');
				$analisistecnico->save();*/

				return Redirect::to('proyectos/seccion/4')	
         			->with('message_exito', 'Sección 4');	
			}
		}else{
			if(Request::ajax())
			{
				
				return Response::json
                                    ([
										'success'    => false,
										'errors'     => $validator ->getMessageBag()->toArray(),
										'message'    => 'Revise los campos .',
										'validation' => 'El campo debe ser numérico.'
                                    ]);
			}else{
				return Redirect::to('proyectos/seccion/4')
					->withErrors($validator)
					->withInput();
			}
		}
		
		
		
	}

	public function edit($folio_proyecto){
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = DB::table('proyectos')
                            ->join('analisis_comerciales',function($join)
                            {
                                $join->on('proyectos.folio','=','analisis_comerciales.folio_proyecto');
                            })
                            ->where('analisis_comerciales.folio_proyecto','=',$folio_proyecto)  
                            ->get();
                     
		return View::make('analisiscomercial/edit',array('perfiles' => $perfiles,'proyectos'=>$proyectos)); 
	}

	public function update(){
		$proyecto_folio = Input::get('campo0');

		$data=array(
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			);

		$rules=array(
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'regex'      => 'El formato del campo es inválido',
		]);
	
		$validator = Validator::make($data, $rules,$messages);

		if($validator->passes()){
			if(Request::ajax()){
				DB::table('analisis_comerciales')
			            ->where('folio_proyecto','=', $proyecto_folio)
			            ->update(array(
							'caracteristicas_empresa' => Input::get('campo1'),
							'funciones_criticas'      => Input::get('campo2'),
							'experiencia_personal'    => Input::get('campo3'),
							'record_de_exito'         => Input::get('campo4'),
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
										'message' => 'Revise los campos porfavor.'
										
                                    ]);
			 }
			
		}
	}

	public function destroy(){

	}
}
