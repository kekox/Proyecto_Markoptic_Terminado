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
                  		
                  		<center><h3><a class="fa fa-arrow-left color-black " style="text-decoration:none;" onclick="window.history.back();">&nbsp;&nbsp;&nbsp;</a>General - Sección 5/10</h3></center>
                  		
                  		<br>
                  		<br>
						<center><span id="_mensaje" class="display-errors" ></span></center>

		                  	<!--Formulario-->
				            <div id="formulariogeneral" class="space">
		                		{{ Form::open(array(
								'route' => 'seccion5.add',
								'class' => 'form-horizontal', 
								'role'  => 'form',
								'id'    =>'formgeneral',
		                		))}}

		                		<center><span class=" display-errors"  id="campoo0">  {{ $errors->first('campo0') }}</span></center>
		                		<div class="col-lg-12"> <!-- Empieza el cero campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo0" >Folio.</label></center>
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
				               				<center><label for="campo1" >Nivel de Desarrollo de la Tecnología.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo1" placeholder="Informacion acerca del campo..."name="campo1" row="2">{{$proyecto->nivel_de_tecnologia}}</textarea> 
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
				               				<center><label for="campo2" >Nivel de innovación del producto, proceso o servicio.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo2" placeholder="Informacion acerca del campo..." name="campo2" row="2">{{$proyecto->nivel_de_innovacion}}</textarea> 
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
				               				<center><label for="campo3" >Riesgo técnico del proyecto.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo3" placeholder="Informacion acerca del campo..."name="campo3" row="2">{{$proyecto->riesgo_tecnico}}</textarea> 
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
				               				<center><label for="campo4" >El principal resultado técnico y comercial del proyecto.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo4" placeholder="Informacion acerca del campo..."name="campo4" row="2">{{$proyecto->principal_resultado}}</textarea> 
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
				               				<center><label for="campo5" >Visión general del presupuesto del proyecto.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo5" placeholder="Informacion acerca del campo..."name="campo5" row="2">{{$proyecto->presupuesto_de_proyecto}}</textarea> 
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
				               				<center><label for="campo6" >Administración del proyecto</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo6" placeholder="Informacion acerca del campo..."name="campo6" row="2">{{$proyecto->administracion_del_proyecto}}</textarea> 
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
				               				<center><label for="campo7" >Disponibilidad y competitividad de la empresa.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo7" placeholder="Informacion acerca del campo..."name="campo7" row="2">{{$proyecto->disponibilidad_y_compatibilidad}}</textarea> 
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
				               				<center><label for="campo8" >Plan de protección industrial vislumbrado.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo8" placeholder="Informacion acerca del campo..."name="campo8" row="2">{{$proyecto->plan_de_proteccion}}</textarea> 
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
				               				<center><label for="campo9" >Medios de generación de ingresos.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo9" placeholder="Informacion acerca del campo..."name="campo9" row="2">{{$proyecto->generacion_de_ingresos}}</textarea> 
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

														
								
								<div class="col-lg-7 col-lg-offset-2 col-lg-push-1">
								<!--  <button class="btn btn-primary btn-block roboto" id="btnproyecto" type="submit" value="Enviar">Siguiente</button>-->
								<input class="btn btn-primary btn-block roboto" id="btngeneral" type="button" value="Guardar">
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
 	@include('includes.Messages.MessageSeccionSuccess')
 	@include('includes.Messages.MessageSuccessEdit')
 	@include('includes.Messages.MessageError')

<script>
	
$(document).ready(function(){

    

    $('#btngeneral').on('click',function()
    {
    	var MyRegExp = /ya ha sido registrado/;
    	var idproyectoform = $('#campo0').val();

    	$.ajax({
          url: '../update',
          dataType: 'json',
          type:'POST',
          data: $('#formgeneral').serialize(),
           
            success: function(datos)
            {
             
             
              
              $('#_campo0 ,#_campo1 ,#_campo2 ,#_campo3 ,#_campo4 ,#_campo5 ,#_campo6 ,#_campo7 ,#_campo8 ,#_campo9').text('');
                
                if(datos.success == false){
                $('.MessageError').modal('show');
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#campoo0').text(datos.errors.campo0);
                  $('#_mensaje').text(datos.message);

                  if(datos.errors.campo1==undefined && datos.errors.campo2==undefined&& datos.errors.campo3==undefined && datos.errors.campo4==undefined&& datos.errors.campo5==undefined&& datos.errors.campo6==undefined && datos.errors.campo7==undefined && datos.errors.campo8==undefined && datos.errors.campo9==undefined){
                			
                			if(MyRegExp.test(value)){
                				$('.MessageError').modal('hide');
	                  			$('.CambiarSeccion').modal('show').on('click','.ChangeSeccion',function(){
							          		window.location.href = '../../dashboard/'+idproyectoform; 
							          });
	                  		}else{
		                  			if(datos.errors.campo0!=datos.validation){
		                  				$('.MessageError').modal('show');	
				        				$('#_campo0').text('Seleccione el folio Correcto.');
		                  			}
	                  			
	                  		}
					}


                });
                }else{
                  $('#_mensaje').text('');
                  $('.MessageSuccessEdit').modal('show');
                  setTimeout(function(){window.location.href='../../../../dashboard/'+idproyectoform}  , 1500);
                
                  
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
            	if (XMLHttpRequest.status === 500) {
            		alert('Favor de seleccionar el folio del proyecto que puso al principio.');
			        $('#campoo0').text('Seleccione el folio Correcto.');
			    }else{
            	 	//alert("Algo salió mal");
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
