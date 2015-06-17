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
                  		
                  		<center><h3><a class="fa fa-arrow-left color-black " style="text-decoration:none;" onclick="window.history.back();">&nbsp;&nbsp;&nbsp;</a>Análisis Comerciales - Sección 4/10</h3></center>
                  		<br>
                  		<br>
						<center><span id="_mensaje" class="display-errors" ></span></center>

		                  	<!--Formulario-->
				            <div id="formulariocomercial" class="space">
		                		{{ Form::open(array(
								'route' => 'seccion4.update',
								'class' => 'form-horizontal', 
								'role'  => 'form',
								'id'    => 'formcomercial',
		                		))}}

		                		 <center><span class=" display-errors"  id="campoo0">  {{ $errors->first('campo0') }}</span></center>
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
				               				<center><label for="campo1" >Características de la empresa.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo1" placeholder="Informacion acerca del campo..."name="campo1" row="2">{{$proyecto->caracteristicas_empresa}}</textarea> 
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
				               				<center><label for="campo2" >Funciones críticas de administración.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo2" placeholder="Informacion acerca del campo..." name="campo2" row="2">{{$proyecto->funciones_criticas}}</textarea> 
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
				               				<center><label for="campo3" >Experiencia del personal. </label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="_campo3" placeholder="Informacion acerca del campo..."name="campo3" row="2">{{$proyecto->experiencia_personal}}</textarea> 
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
				               				<center><label for="campo4" >Récord de éxito en comercialización de proyectos y otras investigaciones.</label></center>
				               			</div>
				               			<div class="col-lg-7">
				               				<textarea type="text" class="form-control"  id="campo4" placeholder="Informacion acerca del campo..."name="campo4" row="2">{{$proyecto->record_de_exito}}</textarea> 
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

								

								<div class="col-lg-7 col-lg-offset-2 col-lg-push-1">
								<!--  <button class="btn btn-primary btn-block roboto" id="btnproyecto" type="submit" value="Enviar">Siguiente</button>-->
								<input class="btn btn-primary btn-block roboto" id="btncomercial" type="button" value="Guardar">
								{{--{{ Form::submit('Siguiente', array('class' => 'btn btn-primary btn-block'))}}--}}
								<br>
				       			
				       			
		                        <!--Termina formulario-->
		                        {{ Form::close() }}
								</div> <!-- Botton de sig -->

		                	</div><!-- Termina id formulario -->
							
							
              		</div>

            	</div>

				@if(isset($proyectos))
					@foreach($proyectos as $proyecto)
            	<a value="{{$proyecto->folio}}" class="ProcessCancel">
					<span class="fa-stack fa-2x pull-right" style="margin-top:10px; margin-right:15px;" title="Cancelar Proceso">
					<i class="fa fa-square  fa-stack-2x fa-inverse"></i>
					<i class="fa fa-sign-out fa-stack-1x text-black"></i>
					</span>
					</a>
					@endforeach
				@endif

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

    

    $('#btncomercial').on('click',function()
    {
    	var MyRegExp = /ya ha sido registrado/;
    	var idproyecto = $('#campo0').attr('value');
    	var idproyectoform = $('#campo0').val();

    	
    	$.ajax({
          url: '../update',
          dataType: 'json',
          type:'POST',
          data: $('#formcomercial').serialize(),
           
            success: function(datos)
            {
             

              $('#_campo0 ,#_campo1 ,#_campo2 ,#_campo3 ,#_campo4').text('');
                if(datos.success == false){
                $('.MessageError').modal('show');
                $.each(datos.errors, function(index, value)
                {
                  $('#_'+index).text(value);
                  $('#campoo0').text(datos.errors.campo0);
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
				        				$('#_campo0').text('Seleccione el folio Correcto.');
		                  			}
	                  			
	                  		}
	                		
					  }

                });
                }else{
                  $('#_mensaje').text('');
                  $('.MessageSuccessEdit').modal('show');
                  setTimeout(function(){window.location.href='../../../../dashboard/'+idproyectoform} , 1500);
                
                  
                }
            },

            error: function (XMLHttpRequest, textStatus, errorThrown) {
            	if (XMLHttpRequest.status === 500) {
            		
            		alert('Folio Incorrecto.\n\nFavor de seleccionar el folio del proyecto que puso al principio.');
			        $('#_campo0').text('Seleccione el folio Correcto.');
			        
			        
			        //console.log(XMLHttpRequest);
			    }else{
            	 	alert("Algo salió mal");
				    //Se puede obtener informacion útil inspecionando el Objeto XMLHttpRequest
				    console.log(XMLHttpRequest.statusText);
				    console.log(textStatus);
				    console.log(errorThrown);
		    	}
			}
            
            
        });

    });

});


</script>


@stop
