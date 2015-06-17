<?php

class DescripcionController extends Controller {

	

	public function create()
	{	
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('descripcion/create',array('perfiles' => $perfiles));
	}

	public function store()
	{
			$proyecto_folio = Input::get('campo0');

			$data=array(
			'campo0'  => Input::get('campo0'),
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			'campo5'  => Input::get('campo5'),
			'campo6'  => Input::get('campo6'),
			);

			$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000|unique:descripciones,folio_proyecto',
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo6'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

			$messages=([
			'required'	 => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'campo0.min' => 'El tamaño del campo debe ser de al menos :min número.',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado',
			]);

			$validator = Validator::make($data, $rules,$messages);

			if($validator->passes()){
				if(Request::ajax()){
					$descripcion                              = new Descripcion;
					$descripcion->folio_proyecto              = Input::get('campo0');
					$descripcion->descripcion_propuesta       = Input::get('campo1');
					$descripcion->principales_actividades     = Input::get('campo2');
					$descripcion->principales_entregables     = Input::get('campo3');
					$descripcion->objetivo_gral               = Input::get('campo4');
					$descripcion->resultados_esperados        = Input::get('campo5');
					$descripcion->descripcion_estrategica_tec = Input::get('campo6');
					$descripcion->save();

					return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'El registro de esta sección fue todo un éxito.',
                                        'dada' => $proyecto_folio,
                                    ]); 
                }else{
                	$descripcion                              = new Descripcion;
					$descripcion->folio_proyecto              = Input::get('campo0');
					$descripcion->descripcion_propuesta       = Input::get('campo1');
					$descripcion->principales_actividades     = Input::get('campo2');
					$descripcion->principales_entregables     = Input::get('campo3');
					$descripcion->objetivo_gral               = Input::get('campo4');
					$descripcion->resultados_esperados        = Input::get('campo5');
					$descripcion->descripcion_estrategica_tec = Input::get('campo6');
					$descripcion->save();

					return Redirect::to('proyectos/seccion/3')	
         				->with('message_exito', 'Sección 3');	
                } 
			}else{
				if(Request::ajax()){

			 		return Response::json
                                    ([
										'success'    => false,
										'errors'     => $validator ->getMessageBag()->toArray(),
										'message'    => 'Revise los campos porfavor',
										'validation' => 'El campo debe ser numérico'
                                    ]);
			 	}else{

				 	return Redirect::to('proyectos/seccion/2')
	        			->withErrors($validator)
	                	->withInput();
			 }
			}

			
	}


	public function edit($folio_proyecto){
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = DB::table('proyectos')
                            ->join('descripciones',function($join)
                            {
                                $join->on('proyectos.folio','=','descripciones.folio_proyecto');
                            })
                            ->where('descripciones.folio_proyecto','=',$folio_proyecto)  
                            ->get();


		return View::make('descripcion/edit',array('perfiles' => $perfiles,'proyectos'=>$proyectos)); 
	}

	public function update(){
		$proyecto_folio = Input::get('campo0');

		

		$data=array(
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			'campo5'  => Input::get('campo5'),
			'campo6'  => Input::get('campo6'),
			);

			$rules=array(
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo6'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
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
				DB::table('descripciones')
			            ->where('folio_proyecto','=', $proyecto_folio)
			            ->update(array(
							'descripcion_propuesta'       =>Input::get('campo1'),
							'principales_actividades'     =>Input::get('campo2'),
							'principales_entregables'     =>Input::get('campo3'),
							'objetivo_gral'               =>Input::get('campo4'),
							'resultados_esperados'        =>Input::get('campo5'),
							'descripcion_estrategica_tec' =>Input::get('campo6'),
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
