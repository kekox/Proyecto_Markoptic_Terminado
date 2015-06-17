<?php

class ReportesController extends Controller {

	
	public function showProyecto($folio_proyecto){

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

        $instituciones = DB::table('proyectos')
                            ->join('instituciones',function($join)
                            {
                                $join->on('proyectos.folio','=','instituciones.folio_proyecto');
                            })
                            ->where('instituciones.folio_proyecto','=',$folio_proyecto)  
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
				return View::make('reportes/show',array('perfiles' => $perfiles,'proyectos'=>$proyectos,
						'descripciones'=>$descripciones,
						'analisistecnicos'=>$analisistecnicos,
						'analisiscomerciales'=>$analisiscomerciales,
						'generales'=>$generales,
						'mercados'=> $mercados,
						'vinculaciones'=>$vinculaciones,
						'instituciones'=>$instituciones,
						'trabajosdetallados'=>$trabajosdetallados,
						'asesorias'=>$asesorias));
			}else{
				return Response::view('error.error404',array(),404);
			}
			
				
		
	}

   


}


