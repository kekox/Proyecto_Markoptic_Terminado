@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

  <section>
            <div id="dashboard1">	
							

                <div class="col-lg-8 col-lg-offset-2">
			          <div class="heading">
								
			                    <center><h3><a href="dashboard" class="fa fa-arrow-left text-black " style="text-decoration:none;"></a>&nbsp;&nbsp;&nbsp;Proyectos<small><h5><a href="proyectos/dashboard/seccion/1">(Agregar Proyecto)</h5></a></small></h3></center>
								
								<br>
			                    <div class="col-lg-8 col-lg-offset-2" >
	
			                    <!--Formulario-->
		                        {{ Form::open(array(
									'route'  => 'proyectosindex',
									'method' => 'GET',
									'class'  => 'form-horizontal', 
									'role'   => 'form',
		                           ))}}
		                        <center>
		                           <div class="input-group">
		                          	  <span class="input-group-btn">
								        <button class="btn btn-default" id="back" ><i class="fa fa-arrow-circle-left fa-1x color-black"></i></button>
								      </span>
								      <input type="text" class="form-control" placeholder="Indique el nombre o folio del proyecto a buscar..." name="buscar">
								      <span class="input-group-btn">
								        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
								      </span>
								    </div>
								</center>
							
                      			
                             	{{ Form::close() }}
								</div>
								
			          </div>
			    </div>
				
				

                <section>
        			<div class="col-sm-12 col-md-12 col-md-offset-2 col-lg-10 col-lg-offset-2">
          			<br>
				    @if(isset($proyectos))
				        @foreach($proyectos as $proyecto)
				          <div class="col-sm-12 col-md-4 col-lg-3 box">   

				              <div class="panel panel-success">
										
								  <div class="panel-heading " style="background-color:#159049;">
								    <h5 class="panel-title text-center text-white montserrat" style=" font-weight:700;">Folio: <strong>{{{$proyecto->folio}}}</strong></h5>
								  </div>

								  <div class="panel-body" style="margin-top:-20px;">
										<center>
										<span class="fa-stack fa-5x">
										<i class="fa fa-circle  fa-stack-2x fa-inverse"></i>
										<i class="fa fa-file-pdf-o  fa-stack-1x text-red"></i>
										
										</span></center>
										
										<center><strong>Nombre del proyecto:</strong><br>{{{$proyecto->nombre_proyecto}}}</center>
										<br>
										<center><strong>Agregado por:</strong><br>{{{$proyecto->nombre.' '.$proyecto->apellido_Paterno.' '.$proyecto->apellido_Materno}}} <br>{{date("d/m/Y",strtotime($proyecto->created_at))}}</center><br>

										<center><strong>Visualizar proyecto:</strong><br><a href="proyectos/reporte/{{$proyecto->folio}}">Ver Proyecto</a></center>

										
										
									

								  </div>
											
											@if(isset($perfiles))
												@foreach($perfiles as $perfil)
													@if($perfil->id_perfil!=1)
								   <center>
								   <div class="panel-footer">							  
											@if($perfil->id_perfil!=1)
											<a href="proyectos/dashboard/{{$proyecto->folio}}" class="btn btn-success btn-sm fa fa-pencil color-white" style="color:white">Editar</a>
											@endif
											@if($perfil->id_perfil==3)
											&nbsp;
											<a href="" class="btn btn-danger btn-sm fa fa-trash-o hidden-xs text-white deleteproyecto" data-toggle="modal" style="color:white;" value="{{$proyecto->folio}}">Eliminar</a>
											@endif
                          				
                                  		
								   </div>
								   </center>
								  					 @endif
						    					@endforeach
											@endif
									
							  </div>     
				          </div>
							 
				        @endforeach
				    	
				    	@if($proyectos->getTotal()==0)
				    	  <div class="col-lg-10">
				    		<div class="jumbotron">
							  <h2 class="montserrat text-center">No se encontro ningún proyecto.</h2>
							  <br>
							  <center><i class="fa fa-times fa-5x"></i></center>
							</div>
						  </div>
				    	@endif
				    	
						
				    @endif
					

				          
      				</div><!-- Termina el box -->

			<div class="container">
				<center>{{$proyectos->appends(array("buscar"=> Input::get('buscar')))->links()}}</center>
			</div>
			<div class="container">
				<center><h3 class="montserrat-btn">total de proyectos:<span class="text-green"> {{$proyectos->getTotal()}}</span></h3> </center>
			</div>
    			</section>

			</div>

  @if(Session::has('message_delete'))
      {{ "<script>
          $(document).ready(function()
          {
            $('.MessageDelete2').modal('show');
          });
         </script>"
      }}        
  @elseif(Session::has('message_cancel'))
      {{ "<script>
          $(document).ready(function()
          {
            $('.MessageStopProcess').modal('show');
          });
         </script>"
      }}   
  @endif 

  <!-- Modales-->
  @include('includes.Modales.ProyectoEliminar')        
    	
    <!--Mensajes-->
  @include('includes.Messages.MessageDelete2')
  @include('includes.Messages.MessageStopProcess')
  
  </section>

 								
		@if(isset($perfiles))
			@foreach($perfiles as $perfil)
				@if($perfil->id_perfil==3)
			<a href="proyectos/list">
			<span class="fa-stack fa-2x pull-right" style="margin-top:10px; margin-right:15px; ">
			<i class="fa fa-square  fa-stack-2x fa-inverse"></i>
			<i class="fa fa-list fa-stack-1x text-black"></i>
			</span>
			</a>
				@endif
			@endforeach
		@endif	

<script>
	
$(document).ready(function(){

     $('#back').on('click',function()
     {
       window.history.back();

     });

});


</script>	

<script>
  $(document).ready(function(){
    $('.deleteproyecto').on('click',function(){
        var id= $(this).attr('value');

        $('#ProyectoDelete').modal('show').on('click','#DeleteProyecto',function(){
              window.location.href = 'proyectos/delete/'+id; 
          });

    });

  });
</script>			  
@stop
