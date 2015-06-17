<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Pagina Bienvenida y Login*/
Route::get('/',array('uses' => 'HomeController@showLogin'));


Route::get('test2',function(){
	return View::make('test2');
});


Route::when('*', 'csrf', array('post', 'put', 'delete'));

/*login*/
Route::get ('login' , array('uses'   => 'AuthController@index'));
Route::post('login' , array('before' => 'csrf','uses' => 'AuthController@postLogin','as'=>'account.login'));
Route::get ('create', array('uses'   => 'AuthController@create'));
Route::post('create', array('before' => 'csrf','uses' => 'AuthController@store','as'=>'account.create'));
Route::get ('logout',  array('uses'  => 'AuthController@getLogout','as'=>'account.logout'));



/*Reset Password*/
Route::get('password/reset',array('uses'           => 'PasswordController@showRemind'));
Route::post('password/reset',array('uses'          => 'PasswordController@postRemind','as'=>'account.reset'));
Route::get('password/reset/{token}', array('uses'  => 'PasswordController@showReset'));
Route::post('password/reset/{token}', array('uses' => 'PasswordController@postReset','as'=>'password.update'));

/* Redirecciona a una pagina de error personalizada y ofrece la opcion de ir a inicio o regresar*/
App::missing(function($excepcion)
{
	return Response::view('error.error404',array(),404);
});


/*Filtro para no permirtir a estas paginas sin estar loggiado  */
Route::group(array('before' => 'auth'), function()
{
	
	/*Pagina Home*/
    Route::get('dashboard', array('uses' => 'HomeController@showDashboard'));

    /*update perfil*/
	Route::post('updateperfil',array('uses'    =>'CmsController@postUpdatePerfil','as'=>'user.update.perfil'));
	Route::get('password/change',array('uses'  =>'PasswordController@getChange','as'=>'password.change'));
	Route::post('password/change',array('uses' =>'PasswordCOntroller@postChange','as'=>'password.change.post'));


    /*seccion proyectos*/
	Route::get('proyectos', array('uses' => 'HomeController@showProyectos','as'=>'proyectosindex'));
	Route::get('proyectos/dashboard/{folio}', array('uses' => 'ProyectoController@dashboard','as'=>'proyecto.edit'));
	Route::get('proyectos/list',array('before' =>'admin','uses' => 'HomeController@showProyectoslist'));



	Route::get('proyectos/dashboard/seccion/1',array('uses'              => 'ProyectoController@create'));
	Route::post('proyectos/dashboard/seccion/1',array('uses'             => 'ProyectoController@store','as'=>'seccion1.add' ));
	Route::get('proyectos/dashboard/seccion/1/edit/{folio}',array('uses' => 'ProyectoController@edit','as'=>'seccion1.data' ));
	Route::post('proyectos/dashboard/seccion/1/update',array('uses'      => 'ProyectoController@update','as'=>'seccion1.update' ));

	
	Route::get('proyectos/dashboard/seccion/2',array('uses'              => 'DescripcionController@create'));
	Route::post('proyectos/dashboard/seccion/2',array('uses'             => 'DescripcionController@store','as'=>'seccion2.add' ));
	Route::get('proyectos/dashboard/seccion/2/edit/{folio}',array('uses' => 'DescripcionController@edit','as'=>'seccion2.data' ));
	Route::post('proyectos/dashboard/seccion/2/update',array('uses'      => 'DescripcionController@update','as'=>'seccion2.update' ));

	Route::get('proyectos/dashboard/seccion/3',array('uses'              => 'AnalisisTecnicoController@create'));
	Route::post('proyectos/dashboard/seccion/3',array('uses'             => 'AnalisisTecnicoController@store','as'=>'seccion3.add' ));
	Route::get('proyectos/dashboard/seccion/3/edit/{folio}',array('uses' => 'AnalisisTecnicoController@edit','as'=>'seccion3.data' ));
	Route::post('proyectos/dashboard/seccion/3/update',array('uses'      => 'AnalisisTecnicoController@update','as'=>'seccion3.update' ));
	
	Route::get('proyectos/dashboard/seccion/4',array('uses'              => 'AnalisisComercialController@create'));
	Route::post('proyectos/dashboard/seccion/4',array('uses'             => 'AnalisisComercialController@store','as'=>'seccion4.add' ));
	Route::get('proyectos/dashboard/seccion/4/edit/{folio}',array('uses' => 'AnalisisComercialController@edit','as'=>'seccion4.data' ));
	Route::post('proyectos/dashboard/seccion/4/update',array('uses'      => 'AnalisisComercialController@update','as'=>'seccion4.update' ));
	
	
	Route::get('proyectos/dashboard/seccion/5',array('uses'              => 'GeneralController@create'));
	Route::post('proyectos/dashboard/seccion/5',array('uses'             => 'GeneralController@store','as'=>'seccion5.add' ));
	Route::get('proyectos/dashboard/seccion/5/edit/{folio}',array('uses' => 'GeneralController@edit','as'=>'seccion5.data' ));
	Route::post('proyectos/dashboard/seccion/5/update',array('uses'      => 'GeneralController@update','as'=>'seccion5.update' ));
	

	Route::get('proyectos/dashboard/seccion/6',array('uses'              => 'MercadoController@create'));
	Route::post('proyectos/dashboard/seccion/6',array('uses'             => 'MercadoController@store','as'=>'seccion6.add' ));
	Route::get('proyectos/dashboard/seccion/6/edit/{folio}',array('uses' => 'MercadoController@edit','as'=>'seccion6.data' ));
	Route::post('proyectos/dashboard/seccion/6/update',array('uses'      => 'MercadoController@update','as'=>'seccion6.update' ));
	
	
	Route::get('proyectos/dashboard/seccion/7',array('uses'              => 'VinculacionController@create'));
	Route::post('proyectos/dashboard/seccion/7',array('uses'             => 'VinculacionController@store','as'=>'seccion7.add' ));
	Route::get('proyectos/dashboard/seccion/7/edit/{folio}',array('uses' => 'VinculacionController@edit','as'=>'seccion7.data' ));
	Route::post('proyectos/dashboard/seccion/7/update',array('uses'      => 'VinculacionController@update','as'=>'seccion7.update' ));
	


	Route::get('proyectos/dashboard/seccion/8',array('uses'              => 'InstitucionController@create'));
	Route::post('proyectos/dashboard/seccion/8',array('uses'             => 'InstitucionController@store','as'=>'seccion8.add' ));
	Route::get('proyectos/dashboard/seccion/8/list/{folio}', array('uses' => 'InstitucionController@show', 'as'=>'seccion8.show'));
	Route::get('proyectos/dashboard/seccion/8/edit/{id}', array('uses' => 'InstitucionController@edit','as'=>'seccion8.data' ));
	Route::post('proyectos/dashboard/seccion/8/update', array('uses'      => 'InstitucionController@update','as'=>'seccion8.update' ));
	Route::get('proyectos/dashboard/seccion/8/delete/{id}', array('uses' =>'InstitucionController@destroy','as'=>'seccion8.delete' ));

	Route::get('proyectos/dashboard/seccion/9',array('uses'              => 'TrabajoDetalladoController@create'));
	Route::post('proyectos/dashboard/seccion/9',array('uses'             => 'TrabajoDetalladoController@store','as'=>'seccion9.add' ));
	Route::get('proyectos/dashboard/seccion/9/edit/{folio}',array('uses' => 'TrabajoDetalladoController@edit','as'=>'seccion9.data' ));
	Route::post('proyectos/dashboard/seccion/9/update',array('uses'      => 'TrabajoDetalladoController@update','as'=>'seccion9.update' ));
	
	
	Route::get('proyectos/dashboard/seccion/10',array('uses'              => 'AsesoriaController@create'));
	Route::post('proyectos/dashboard/seccion/10',array('uses'             => 'AsesoriaController@store','as'=>'seccion10.add' ));
	Route::get('proyectos/dashboard/seccion/10/edit/{folio}',array('uses' => 'AsesoriaController@edit','as'=>'seccion10.data' ));
	Route::post('proyectos/dashboard/seccion/10/update',array('uses'      => 'AsesoriaController@update','as'=>'seccion10.update' ));

    
	Route::get('proyectos/delete/{id}',array('uses' => 'ProyectoController@destroy','as'=>'proyecto.delete'));
	Route::get('proyectos/stop/{id}',array('uses' => 'ProyectoController@stop','as'=>'proyecto.cancel'));

	/*Seccion CMS*/
	Route::get('cms',array('before' =>'admin','uses'             => 'CmsController@index'));
	Route::post('cms',array('uses'            => 'CmsController@store','as'=>'user.store'));
	Route::post('cms/edit/{id}',array('uses'  => 'CmsController@edit','as'=>'user.data'));
	Route::post('cms/update',array('uses'     => 'CmsController@update','as'=>'user.update'));
	Route::get('cms/delete/{id}',array('uses' => 'CmsController@destroy','as'=>'user.delete'));

	
	//users datas
	Route::post('proyectos/dashboard/seccion/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/1/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/2/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/3/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/4/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/5/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/6/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/7/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/8/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/9/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/10/edit/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('proyectos/dashboard/seccion/8/list/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));
	Route::post('password/cms/edit/{id}',array('uses' => 'CmsController@edit','as'=>'user.data'));

	/*Seccion de reportes*/
	Route::get('proyectos/reporte/{folio}',array('uses'             => 'ReportesController@showProyecto'));
	Route::get('proyectos/reporte/t/{folio}',array('uses'             => 'ReportesController@showReportProyecto'));

	/*Seccion del chat */
	Route::get('chat',array('uses' => 'ChatController@showChat'));
	Route::post('chat',array('before' => 'csrf','uses' => 'ChatController@postChat'));

	/*Seccion de dudas y sugerencias */
	Route::get('contacto',array('uses' => 'ContactoController@showContacto'));
	Route::post('contacto',array('uses' => 'ContactoController@postContacto', 'as' =>'contacto.sent'));

	/*Reportes*/
	Route::get('proyectos/pdf',array('uses'=>'ReportesController@pdfProyecto'));
	

});

