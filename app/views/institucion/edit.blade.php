@extends('layout.master')
@section('title')
:: Dashboard
@stop 

@section('contenido')

  <section >
            <div class="container-fluid ">
              <div class="row">
                 
                <div id="formproyectos" >
                  	<div class="col-lg-10 col-lg-offset-1">
                  		
                  		<center><h3><a class="fa fa-arrow-left color-black " style="text-decoration:none;" onclick="window.history.back();">&nbsp;&nbsp;&nbsp;</a>Institución - 8/10</h3></center>
                  		
                  		<br>
                  		<br>
						<center><span id="_mensaje" class="display-errors" ></span></center>

		                  	<!--Formulario-->
				            <div id="formularioinstitucion" class="space">
		                		{{ Form::open(array(
								'route' => 'seccion8.update',
								'class' => 'form-horizontal', 
								'role'  => 'form',
								'id'    =>'forminstitucion',
		                		))}}
								

		                		<center><span class=" display-errors"  id="campoo0">  {{ $errors->first('campo0') }}</span></center>
		                		<div class="col-lg-12"> <!-- Empieza el cero campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo0" >Folio</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               			@if(isset($proyectos))
											@foreach($proyectos as $proyecto)
				               				<textarea type="text" class="form-control"  id="campo0" placeholder="Informacion acerca del campo..."name="campo0" row="2" value="{{$proyecto->folio}}" readonly>{{$proyecto->folio_proyecto}}</textarea>
				               				@endforeach
										@endif 
				               			</div>
				               			<div class="col-lg-1">
				               				  <a href="#" data-toggle="tooltip" id="myTooltip0" >
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina cero campo -->
								
		               			<center><span class=" display-errors"  id="_campo1">  {{ $errors->first('campo1') }}</span></center>
		               			<div class="col-lg-12"> <!-- Empieza el primer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo1" >Registro.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo1" placeholder="Informacion acerca del campo..."name="campo1" row="2">{{$proyecto->registro}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
				               				  <a href="#" data-toggle="tooltip" id="myTooltip1" >
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina primer campo -->
								

								<center><span class=" display-errors"  id="_campo2">  {{ $errors->first('campo2') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el segundo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo2" >¿La vinculación contempla el uso de infraestructura de laboratorio u otro equipamiento de la institución vinculada?</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo2" placeholder="Informacion acerca del campo..." name="campo2" row="2">{{$proyecto->equipamento}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip2">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina segundo campo -->

								<center><span class=" display-errors"  id="_campo3">  {{ $errors->first('campo3') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el tercer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo3" >¿La vinculación incluye actividades de diseño y prototipado?</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo3" placeholder="Informacion acerca del campo..."name="campo3" row="2">{{$proyecto->diseño_o_prototipo}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip3">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina tercer campo -->

								<center><span class=" display-errors"  id="_campo4">  {{ $errors->first('campo4') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el cuarto campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo4" >¿La vinculación requiere la realización de ensayos, peritajes, caracterizaciones, validaciones, pruebas funcionales, etc.?</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo4" placeholder="Informacion acerca del campo..."name="campo4" row="2">{{$proyecto->realizaciones}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip4">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina cuarto campo -->

								<center><span class=" display-errors"  id="_campo5">  {{ $errors->first('campo5') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el quinto campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo5" >¿La vinculación implica escalamientos a planta piloto?</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo5" placeholder="Informacion acerca del campo..."name="campo5" row="2">{{$proyecto->escalamiento_piloto}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip5">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el quinto campo -->

								<center><span class=" display-errors"  id="_campo6">  {{ $errors->first('campo6') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el sexto campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo6" >¿La vinculación considera la creación de un grupo de trabajo conjunto entre personal de la empresa y la institución vinculada?</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo6" placeholder="Informacion acerca del campo..."name="campo6" row="2">{{$proyecto->grupo_trabajo_vinculacion}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip6">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el sexto campo -->

								<center><span class=" display-errors"  id="_campo7">  {{ $errors->first('campo7') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el septimo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo7" >¿La vinculación considera algún esquema de transferencia o comercialización de la tecnología desarrollada?</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo7" placeholder="Informacion acerca del campo..."name="campo7" row="2">{{$proyecto->esquema}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip7">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el septimo campo -->

								<center><span class=" display-errors"  id="_campo8">  {{ $errors->first('campo8') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el octavo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo8" >Describa actividades a desarrollar.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo8" placeholder="Informacion acerca del campo..."name="campo8" row="2">{{$proyecto->descripcion_actividades}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip8">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el octavo campo -->

								<center><span class=" display-errors"  id="_campo9">  {{ $errors->first('campo9') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el noveno campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo9" >Entregables comprometidos.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo9" placeholder="Informacion acerca del campo..."name="campo9" row="2">{{$proyecto->entregables}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip9">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el noveno campo -->

								<center><span class=" display-errors"  id="_campo10">  {{ $errors->first('campo10') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el decimo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo10" >Descripción de la participación.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo10" placeholder="Informacion acerca del campo..."name="campo10" row="2">{{$proyecto->descripcion_participacion}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip10">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el decimo campo -->	

								<center><span class=" display-errors"  id="_campo11">  {{ $errors->first('campo11') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el onceavo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo11" >Datos de contacto del personal responsable con la presente propuesta de esta institución.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo11" placeholder="Informacion acerca del campo..."name="campo11" row="2">{{$proyecto->informacion_contacto}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip11">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el onceavo campo -->


								<center><span class=" display-errors"  id="_campo12">  {{ $errors->first('campo12') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el doceavo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo12" >Grupo de Trabajo del Proyecto.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo12" placeholder="Informacion acerca del campo..."name="campo12" row="2">{{$proyecto->grupo_de_trabajo}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip12">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el doceavo campo -->	

								<center><span class=" display-errors"  id="_campo13">  {{ $errors->first('campo13') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el terceavo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo13" >Grado Académico (de cada participante en el proyecto).</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo13" placeholder="Informacion acerca del campo..."name="campo13" row="2">{{$proyecto->grado_academico}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip13">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el terceavo campo -->	

								<center><span class=" display-errors"  id="_campo14">  {{ $errors->first('campo14') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el catorciavo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo14" >Producto que generará (cada uno de los participantes).</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo14" placeholder="Informacion acerca del campo..."name="campo14" row="2">{{$proyecto->producto}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip14">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el catorciavo campo -->	

								<center><span class=" display-errors"  id="_campo15">  {{ $errors->first('campo15') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el quinceavo campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo15" >Información relevante del participante ( de cada uno de los participantes en el proyecto).</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo15" placeholder="Informacion acerca del campo..."name="campo15" row="2">{{$proyecto->informacion_participante}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip15">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el quinceavo campo -->	

								<center><span class=" display-errors"  id="_campo16">  {{ $errors->first('campo16') }}</span></center>
								<div class="col-lg-12"> <!-- Empiezan el dieciseis campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo16" >Actividades específicas que realizará dentro del  proyecto (de cada participante en el proyecto).</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo16" placeholder="Informacion acerca del campo..."name="campo16" row="2">{{$proyecto->actividades_especificos}}</textarea> 
				               			</div>
				               			<div class="col-lg-1">
											  <a href="#" data-toggle="tooltip" id="myTooltip16">
				               				  <span class="fa-stack fa-2x">
							                  <i class="fa fa-circle  fa-stack-2x text-orange" ></i>
							                  <i class="fa fa-info  fa-stack-1x fa-inverse"></i>
							                  </span></center>
							                  </a>
							            </div>
									</section>
								</div> <!-- Termina el dieciseis campo -->		
				
								

								<textarea type="text" class="form-control"  id="idinstitucion" placeholder="Informacion acerca del campo..."name="idinstitucion" row="2" value="{{$proyecto->id}}" readonly style="display:none;">{{$proyecto->id}}</textarea>

								<div class="col-lg-7 col-lg-offset-2 col-lg-push-1">
								<!--  <button class="btn btn-primary btn-block roboto" id="btnproyecto" type="submit" value="Enviar">Siguiente</button>-->
								<input class="btn btn-primary btn-block roboto" id="btninstitucion" type="button" value="Guardar">
								{{--{{ Form::submit('Siguiente', array('class' => 'btn btn-primary btn-block'))}}--}}
								<br>
				       			
				       			
		                        <!--Termina formulario-->
		                        {{ Form::close() }}
								</div> <!-- Botton de sig -->

		                	</div><!-- Termina id formulario -->
							
							
              		</div>

            	</div>

				

            </div>
        </div>
            
    <!-- Modales-->
 	@include('includes.Modales.CambiarSeccion') 
  </section>

    <!-- Messages-->

 	@include('includes.Messages.MessageSuccessEdit')
 	@include('includes.Messages.MessageError')

<script>
	
$(document).ready(function(){

    

    $('#btninstitucion').on('click',function()
    {
    	var MyRegExp = /ya ha sido registrado/;
    	var idproyecto = $('#campo0').attr('value');
		var idproyectoform = $('#campo0').val();

    	$.ajax({
          url: '../update',
          dataType: 'json',
          type:'POST',
          data: $('#forminstitucion').serialize(),
           
            success: function(datos)
            {
             
             
             
              $('#_campo0 ,#_campo1 ,#_campo2 ,#_campo3 ,#_campo4 ,#_campo5 ,#_campo6 ,#_campo7 ,#_campo8 ,#_campo9 ,#_campo10 ,#_campo11,#_campo12,#_campo13,#_campo14,#_campo15,#_campo16').text('');
              
                if(datos.success == false){
                $('.MessageError').modal('show');
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#campoo0').text(datos.errors.campo0);
                  $('#_mensaje').text(datos.message);


                  	               
                });
                }else{
						    $('#_mensaje').text('');
                  			$('.MessageSuccessEdit').modal('show');
      						 setTimeout(function(){window.location.href='../../../../dashboard/'+idproyectoform}  , 1500);
					 }
                  
                
                  
                
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
            	if (XMLHttpRequest.status === 500) {
            		$('#_campo0 ,#_campo1 ,#_campo2 ,#_campo3 ,#_campo4 ,#_campo5 ,#_campo6 ,#_campo7 ,#_campo8 ,#_campo9 ,#_campo10 ,#_campo11,#_campo12,#_campo13,#_campo14,#_campo15,#_campo16').text('');
            		$('.MessageFolioIncorrect').modal('show');
			        $('#campoo0').text('Favor de cambiar el folio');
			    }else{
            	 	//alert("Algo esta mal");
				    //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
				    //console.log(XMLHttpRequest.statusText);
				    //console.log(textStatus);
				    //console.log(errorThrown);;
		    	}
			}
            
            
        });

    });

});


</script>



@stop
