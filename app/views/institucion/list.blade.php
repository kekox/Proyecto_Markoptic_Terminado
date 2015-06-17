@extends('layout.master')
@section('title')
:: Dashboard
@stop 

@section('contenido')

<section >
		<h3 class="montserrat-btn"><center><a class="fa fa-arrow-left color-black " style="text-decoration:none;" onclick="window.history.back();">&nbsp;&nbsp;&nbsp;</a>Seleccione la institución</center></h3>
<hr>
@foreach($instituciones as $institucion)
		
		<center>
		<div class="col-lg-8 col-lg-offset-2">
			<div class="panel panel-success" >
			  <div class="panel-heading " style="background-color:#31a463;">
			    <h3 class="panel-title montserrat text-white">Institución <strong>{{{$institucion->id}}}&nbsp;&nbsp;</strong></h3>
			  </div>
			  <div class="panel-body">
			    <strong>{{{$institucion->registro}}}&nbsp;&nbsp;</strong>
				<hr>
				<a href="../edit/{{$institucion->id}}"><button type="btn" class="btn btn-success btn-sm fa fa-pencil edit "> Editar</button></a>

				<a href="../delete/{{$institucion->id}}"><button type="btn" class="btn btn-danger btn-sm fa fa-trash-o hidden-xs delete"> Borrar</button></a>
			  </div>
			</div>
		</div>
		</center>
		
		

		
@endforeach
  <!--Mensajes-->
  @include('includes.Messages.MessageInstitucionDelete')

@if(Session::has('message_delete'))
      {{ "<script>
          $(document).ready(function()
          {
            $('.MessageInstitucionDelete').modal('show');
          });
         </script>"
      }}        
  @endif 
</section>

@stop
