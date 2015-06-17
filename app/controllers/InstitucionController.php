<?php

class InstitucionController extends Controller {

	

	public function create(){	
		$perfiles = Perfil::ObtenerPerfil()->get();
		return View::make('institucion/create',array('perfiles' => $perfiles));
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
			'campo8'  => Input::get('campo8'),
			'campo9'  => Input::get('campo9'),
			'campo10' => Input::get('campo10'),
			'campo11' => Input::get('campo11'),
			'campo12' => Input::get('campo12'),
			'campo13' => Input::get('campo13'),
			'campo14' => Input::get('campo14'),
			'campo15' => Input::get('campo15'),
			'campo16' => Input::get('campo16'),
			);

		$rules=array(
			'campo0'  => 'required|numeric|min:1|max:100000',
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
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
			'campo13' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo14' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo15' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo16' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
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
			$institucion                             = new Institucion;
			$institucion ->folio_proyecto            = Input::get('campo0');
			$institucion ->registro                  = Input::get('campo1');
			$institucion ->equipamento               = Input::get('campo2');
			$institucion ->diseño_o_prototipo        = Input::get('campo3');
			$institucion ->realizaciones             = Input::get('campo4');
			$institucion ->escalamiento_piloto       = Input::get('campo5');
			$institucion ->grupo_trabajo_vinculacion = Input::get('campo6');
			$institucion ->esquema                   = Input::get('campo7');
			$institucion ->descripcion_actividades   = Input::get('campo8');
			$institucion ->entregables               = Input::get('campo9');
			$institucion ->descripcion_participacion = Input::get('campo10');
			$institucion ->informacion_contacto      = Input::get('campo11');
			$institucion ->grupo_de_trabajo          = Input::get('campo12');
			$institucion ->grado_academico           = Input::get('campo13');
			$institucion ->producto                  = Input::get('campo14');
			$institucion ->informacion_participante  = Input::get('campo15');
			$institucion ->actividades_especificos   = Input::get('campo16');
			$institucion->save();

			
			return Response::json
                                    ([
                                        'success' => true,
                                        'message' => 'El registro de esta sección fue todo un éxito.'
                                    ]);  
			}else{
			/*$institucion                             = new Institucion;
			$institucion ->folio_proyecto            = Input::get('campo0');
			$institucion ->registro                  = Input::get('campo1');
			$institucion ->equipamento               = Input::get('campo2');
			$institucion ->diseño_o_prototipo        = Input::get('campo3');
			$institucion ->realizaciones             = Input::get('campo4');
			$institucion ->escalamiento_piloto       = Input::get('campo5');
			$institucion ->grupo_trabajo_vinculacion = Input::get('campo6');
			$institucion ->esquema                   = Input::get('campo7');
			$institucion ->descripcion_actividades   = Input::get('campo8');
			$institucion ->entregables               = Input::get('campo9');
			$institucion ->descripcion_participacion = Input::get('campo10');
			$institucion ->informacion_contacto      = Input::get('campo11');
			$institucion ->grupo_de_trabajo          = Input::get('campo12');
			$institucion ->grado_academico           = Input::get('campo13');
			$institucion ->producto                  = Input::get('campo14');
			$institucion ->informacion_participante  = Input::get('campo15');
			$institucion ->actividades_especificos   = Input::get('campo16');
			$institucion->save();*/
			
			return Redirect::to('proyectos/seccion/9')	
         			->with('message_exito', 'Sección 9');	
			}
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
                                        'success' => false,
                                        'errors' => $validator ->getMessageBag()->toArray(),
                                        'message' => "Revise los campos porfavor."
                                    ]);
			 }else{

			 	return Redirect::to('proyectos/seccion/9')
        			->withErrors($validator)
                	->withInput();
			 }
			
		}
	}

	
	public function show($folio_proyecto){
		$perfiles = Perfil::ObtenerPerfil()->get();
		$instituciones = DB::table('proyectos')
                            ->join('instituciones',function($join)
                            {
                                $join->on('proyectos.folio','=','instituciones.folio_proyecto');
                            })
                            ->where('instituciones.folio_proyecto','=',$folio_proyecto)  
                            ->get();


        if($instituciones){
        	return View::make('institucion/list',array('perfiles' => $perfiles,'instituciones'=> $instituciones));
        }else{
        	return Redirect::to('proyectos/dashboard/'.$folio_proyecto)->with('message','No existe algún registro en esta esta sección.');
        }            
		
        
	}

	
	public function edit($id){
		$perfiles = Perfil::ObtenerPerfil()->get();
		$proyectos = DB::table('proyectos')
                            ->join('instituciones',function($join)
                            {
                                $join->on('proyectos.folio','=','instituciones.folio_proyecto');
                            })
                            ->where('instituciones.id','=',$id)  
                            ->get();

        return View::make('institucion/edit',array('perfiles' => $perfiles,'proyectos'=>$proyectos)); 

        
	}

	public function update(){
		$id = Input::get('idinstitucion');

		$data=array(
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
			'campo13' => Input::get('campo13'),
			'campo14' => Input::get('campo14'),
			'campo15' => Input::get('campo15'),
			'campo16' => Input::get('campo16'),
			);

		$rules=array(
			'campo1'  => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
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
			'campo13' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo14' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo15' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			'campo16' => 'regex:/^[\sa-z0-9 A-Z ñ.-_,?!()*ÑáéíóúÁÉÍÓÚ-]+$/',
			);

		$messages=([
			'regex'      => 'El formato del campo es inválido',

		]);
	
		$validator = Validator::make($data, $rules,$messages);

		if(Request::ajax()){
				DB::table('instituciones')
			            ->where('id','=', $id)
			            ->update(array(
							'registro'                  => Input::get('campo1'),
							'equipamento'               => Input::get('campo2'),
							'diseño_o_prototipo'        => Input::get('campo3'),
							'realizaciones'             => Input::get('campo4'),
							'escalamiento_piloto'       => Input::get('campo5'),
							'grupo_trabajo_vinculacion' => Input::get('campo6'),
							'esquema'                   => Input::get('campo7'),
							'descripcion_actividades'   => Input::get('campo8'),
							'entregables'               => Input::get('campo9'),
							'descripcion_participacion' => Input::get('campo10'),
							'informacion_contacto'      => Input::get('campo11'),
							'grupo_de_trabajo'          => Input::get('campo12'),
							'grado_academico'           => Input::get('campo13'),
							'producto'                  => Input::get('campo14'),
							'informacion_participante'  => Input::get('campo15'),
							'actividades_especificos'   => Input::get('campo16'),
							));
	
			
			return Response::json
                                    ([
										'success' => true,
										'message' => 'El registro de esta sección fue todo un éxito.',
                                    ]);  
			
			


		}else{
			 if(Request::ajax()){

			 	return Response::json
                                    ([
										'success' => false,
										'errors'  => $validator ->getMessageBag()->toArray(),
										'message' => 'Revise los campos porfavor.',
                                    ]);
			 }
			
		}
	}

	public function destroy($id){
		DB::table('instituciones')->where('id', '=', $id)->delete();
        return Redirect::back()
            ->with('message_delete','Proyecto Eliminado Correctamente');
	}
}
