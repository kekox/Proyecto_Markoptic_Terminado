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
                  		
                  		<center><h3><a class="fa fa-arrow-left color-black " style="text-decoration:none;" onclick="window.history.back();">&nbsp;&nbsp;&nbsp;</a>Trabajo Detallado - Sección 9/10</h3></center>
                  		
						<br>
						<br>
						<center><span id="_mensaje" class="display-errors" ></span></center>

		                  	<!--Formulario-->
				            <div id="formulariodetallado" class="space">
		                		{{ Form::open(array(
								'route' => 'seccion9.add',
								'class' => 'form-horizontal', 
								'role'  => 'form',
								'id'    => 'formdetallado',
		                		))}}

		                		<center><span class=" display-errors"  id="campo00">  {{ $errors->first('campo0') }}</span></center>
		                		<div class="col-lg-12"> <!-- Empieza el primer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo1" >Folio.</label></center>
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
								</div> <!-- Termina primer campo -->
								
		               			<center><span class=" display-errors"  id="_campo1">  {{ $errors->first('campo1') }}</span></center>
		               			<div class="col-lg-12"> <!-- Empieza el primer campo -->
			               			<section  class="form-group">
				               			<div class="col-lg-3 ">
				               				<center><label for="campo1" >Descripción general del plan de trabajo para el ciclo fiscal.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo1" placeholder="Informacion acerca del campo..."name="campo1" row="2">{{$proyecto->plan_de_trabajo}}</textarea> 
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
				               				<center><label for="campo2" >Descripción y justificación de las actividades.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo2" placeholder="Informacion acerca del campo..." name="campo2" row="2">{{$proyecto->desc_justificacion_actividades}}</textarea> 
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
				               				<center><label for="campo3" >Productos de la etapa.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo3" placeholder="Informacion acerca del campo..."name="campo3" row="2">{{$proyecto->producto_etapa}}</textarea> 
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
				               				<center><label for="campo4" >Descripción de las etapas posteriores.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo4" placeholder="Informacion acerca del campo..."name="campo4" row="2">{{$proyecto->desc_etapas}}</textarea> 
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
				               				<center><label for="campo5" >Presupuesto.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo5" placeholder="Informacion acerca del campo..."name="campo5" row="2">{{$proyecto->presupuesto}}</textarea> 
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


								<div class="col-lg-7 col-lg-offset-2 col-lg-push-1">
								<!--  <button class="btn btn-primary btn-block roboto" id="btnproyecto" type="submit" value="Enviar">Siguiente</button>-->
								<input class="btn btn-primary btn-block roboto" id="btndetallado" type="button" value="Guardar">
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

  

    $('#btndetallado').on('click',function()
    {

    	var MyRegExp = /ya ha sido registrado/;
		var MyRegExp2 = /numerico/;
		var idproyectoform = $('#campo0').val();

    	$.ajax({
          url: '../update',
          dataType: 'json',
          type:'POST',
          data: $('#formdetallado').serialize(), //Se obtienen los datos del formulario
           
            success: function(datos)
            {
             
             
              //Donde se vana  mostrar los errores
              $('#_campo0 ,#_campo1 ,#_campo2 ,#_campo3 ,#_campo4 ,#_campo5 ,#_campo6 ,#_campo7').text('');
                //Si la respuesta de ajax es false se hace esto
                if(datos.success == false){
                $('.MessageError').modal('show');
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#campo00').text(datos.errors.campo0);
                  $('#_mensaje').text(datos.message);

                  if(datos.errors.campo1==undefined && datos.errors.campo2==undefined&& datos.errors.campo3==undefined && datos.errors.campo4==undefined){
                			
                			if(MyRegExp.test(value)){
                				$('.MessageError').modal('hide');
	                  			$('.CambiarSeccion').modal('show').on('click','.ChangeSeccion',function(){
							          		window.location.href = '../../dashboard/'+idproyectoform; 
							          });
	                  		}else{
		                  			if(datos.errors.campo0!=datos.validation){
		                  				$('.MessageError').modal('show');	
				        				$('#campo00').text('Seleccione el folio Correcto.');
		                  			}
	                  			
	                  		}
					}

                });
                }else{
                  $('#campo00').text('');
                  $('#_mensaje').text('');
                  $('.MessageSuccessEdit').modal('show');
                  setTimeout(function(){window.location.href='../../../../dashboard/'+idproyectoform},1500);
                
                  
                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) {
            	if (XMLHttpRequest.status === 500) {
            		alert('Favor de seleccionar el folio del proyecto que puso al principio.')
			        $('#campo00').text('Seleccione el folio Correcto');

			        console.log(XMLHttpRequest);
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
