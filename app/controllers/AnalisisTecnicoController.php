<?php

class AnalisisTecnicoController extends Controller {

	

	public function create(){	
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('analisistecnico/create2',array('perfiles' => $perfiles));
	}

	public function store(){

		$data=array(
			'campo0'  => Input::get('campo0'),
			'campo1'  => Input::get('campo1'),
			'campo2'  => Input::get('campo2'),
			'campo3'  => Input::get('campo3'),
			'campo4'  => Input::get('campo4'),
			'campo5'  => Input::get('campo5'),
			'campo6'  => Input::get('campo6'),
			'campo7'  => Input::get('campo7'),
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000|unique:analisis_tecnicos,folio_proyecto',
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo6'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo7'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'required'	 => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'campo0.min' => 'El tamaño del campo debe ser de al menos :min número.',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado'
		]);
	
		$validator = Validator::make($data, $rules,$messages);

		if($validator->passes()){
			if(Request::ajax()){
				$analisistecnico                          = new AnalisisTecnico;
				$analisistecnico->folio_proyecto          = Input::get('campo0');
				$analisistecnico->antecedentes            = Input::get('campo1');
				$analisistecnico->edo_tec_1               = Input::get('campo2');
				$analisistecnico->edo_tec_2               = Input::get('campo3');
				$analisistecnico->edo_tec_3               = Input::get('campo4');
				$analisistecnico->edo_tec_4               = Input::get('campo5');
				$analisistecnico->edo_tec_5               = Input::get('campo6');
				$analisistecnico->origen_de_la_tecnologia = Input::get('campo7');
				$analisistecnico->save();

			
			return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'El registro de esta sección fue todo un éxito.'
                                    ]);  
			}else{
				/*$analisistecnico                          = new AnalisisTecnico;
				$analisistecnico->folio_proyecto          = Input::get('campo0');
				$analisistecnico->antecedentes            = Input::get('campo1');
				$analisistecnico->edo_tec_1               = Input::get('campo2');
				$analisistecnico->edo_tec_2               = Input::get('campo3');
				$analisistecnico->edo_tec_3               = Input::get('campo4');
				$analisistecnico->edo_tec_4               = Input::get('campo5');
				$analisistecnico->edo_tec_5               = Input::get('campo6');
				$analisistecnico->origen_de_la_tecnologia = Input::get('campo7');
				$analisistecnico->save();*/

			
			return Redirect::to('proyectos/seccion/2')	
         			->with('message_exito', 'Sección 2');	
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

			 	return Redirect::to('proyectos/seccion/3')
        			->withErrors($validator)
                	->withInput();
			 }
			
		}
	}

	public function edit($folio_proyecto){
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = DB::table('proyectos')
                            ->join('analisis_tecnicos',function($join)
                            {
                                $join->on('proyectos.folio','=','analisis_tecnicos.folio_proyecto');
                            })
                            ->where('analisis_tecnicos.folio_proyecto','=',$folio_proyecto)  
                            ->get();

                     
		return View::make('analisistecnico/edit',array('perfiles' => $perfiles,'proyectos'=>$proyectos)); 
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
			'campo7'  => Input::get('campo7'),
			);

		$rules=array(
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo6'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo7'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'regex'      => 'El formato del campo es inválido',
		]);
	
		$validator = Validator::make($data, $rules,$messages);


		if($validator->passes()){
			if(Request::ajax()){
				DB::table('analisis_tecnicos')
			            ->where('folio_proyecto','=', $proyecto_folio)
			            ->update(array(
							'antecedentes'            =>Input::get('campo1'),
							'edo_tec_1'               =>Input::get('campo2'),
							'edo_tec_2'               =>Input::get('campo3'),
							'edo_tec_3'               =>Input::get('campo4'),
							'edo_tec_4'               =>Input::get('campo5'),
							'edo_tec_5'               =>Input::get('campo6'),
							'origen_de_la_tecnologia' =>Input::get('campo7'),
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
