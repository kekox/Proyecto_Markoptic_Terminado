<?php

class AsesoriaController extends Controller {

	

	public function create(){	
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('asesoria/create',array('perfiles' => $perfiles));
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
			'campo0'  => 'required|numeric|min:1|max:100000|unique:asesorias,folio_proyecto',
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo2'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo3'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo4'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo5'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'required'   => 'El campo es obligatorio.',
			'numeric'    => 'El campo debe ser numérico',
			'regex'      => 'El formato del campo es inválido',
			'campo0.min' => 'El tamaño del campo debe ser de al menos :min número.',
			'min'        => 'El campo debe contener al menos :min caracteres.',
			'unique'	 => 'El folio ya ha sido registrado.'
		]);



		$validator = Validator::make($data, $rules, $messages);

		if($validator->passes()){
			if(Request::ajax()){

				$asesoria                           = new Asesoria;
				$asesoria->folio_proyecto           = Input::get('campo0');
				$asesoria->pregunta_1               = Input::get('campo1');
				$asesoria->pregunta_2               = Input::get('campo2');
				$asesoria->pregunta_3               = Input::get('campo3');
				$asesoria->pregunta_4               = Input::get('campo4');
				$asesoria->responsable_del_proyecto = Input::get('campo5');
				$asesoria->save();
				
			

			
			return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'Proyecto Agregado Exitosamente.'
                                    ]);  
			}else{
				
				/*$asesoria                           = new Asesoria;
				$asesoria->folio_proyecto           = Input::get('campo0');
				$asesoria->pregunta_1               = Input::get('campo1');
				$asesoria->pregunta_2               = Input::get('campo2');
				$asesoria->pregunta_3               = Input::get('campo3');
				$asesoria->pregunta_4               = Input::get('campo4');
				$asesoria->responsable_del_proyecto = Input::get('campo5');
				$asesoria->save();*/

			
			
			return Redirect::to('proyectos')	
         			->with('message_exito', 'Proyecto agregado satisfactoriamente.');
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

			 	return Redirect::to('proyectos/seccion/10')
        			->withErrors($validator)
                	->withInput();
			 }
			
		}
	
	}


	public function edit($folio_proyecto){
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = DB::table('proyectos')
                            ->join('asesorias',function($join)
                            {
                                $join->on('proyectos.folio','=','asesorias.folio_proyecto');
                            })
                            ->where('asesorias.folio_proyecto','=',$folio_proyecto)  
                            ->get();
        if($proyectos){
        	return View::make('asesoria/edit',array('perfiles' => $perfiles,'proyectos'=>$proyectos)); 
        }else{
        	 return Redirect::back()->with('message','No existe algún registro de esta sección.');
        	 
        }         
		
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



		$validator = Validator::make($data, $rules, $messages);


		if($validator->passes()){
			if(Request::ajax()){
				DB::table('asesorias')
			            ->where('folio_proyecto','=', $proyecto_folio)
			            ->update(array(
							'pregunta_1'               => Input::get('campo1'),
							'pregunta_2'               => Input::get('campo2'),
							'pregunta_3'               => Input::get('campo3'),
							'pregunta_4'               => Input::get('campo4'),
							'responsable_del_proyecto' => Input::get('campo5'),
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
