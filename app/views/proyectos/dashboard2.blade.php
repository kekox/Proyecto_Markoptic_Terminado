@extends('layout.master')
@section('title')
:: Dashboard
@stop 
@section('contenido')
<div id="dashboard2">

  <div class="row nulink col-lg-10 col-lg-offset-1">
     @if($proyectos)
          @foreach($proyectos as $proyecto)
              <center><h3 class="montserrat">
              <a href="../../proyectos"class="fa fa-arrow-left color-black " style="text-decoration:none;" ></a>            Folio del proyecto: <span style="text-decoration:underline;">{{$proyecto->folio}}</span>
              </h3><center>

              @if (Session::has('message'))
                  <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Nota!</strong> {{ Session::get('message') }}
                  </div>
              @endif

        <div class="col-md-3 col-lg-3">   
          <div class="box">
              <h3>Proyectos</h3>

                <div class="content">
                    <center><span class="fa-stack fa-5x">
                       <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text fa-inverse">1</strong>
                    </span></center>
                </div>

                <div class="ft">
                            <a href="seccion/1/edit/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>      
                </div> 


          </div>  
        </div>


        <div class="col-md-3 col-lg-3">
          <div class="box">
              <h3>Descripciones</h3>

                <div class="content">
                    <center><span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text file-text fa-inverse">2</strong>
                    </span></center>
                </div>

                <div class="ft">
                    @if(isset($descripciones))
                       <a href="seccion/2/edit/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>
                    @else
                        <a href="seccion/2"><button type="btn" class="btn btn-primary btn-sm montserrat-btn">Crear</button></a>
                   @endif       
                                  
                </div> 

                  
          </div>
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="box">  
              <h3>Técnicos</h3>
                
                <div class="content">
                    <center><span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text fa-inverse">3</strong>
                    </span></center>
                </div>

                <div class="ft">
                    @if(isset($analisistecnicos))
                           <a href="seccion/3/edit/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>
                    @else
                          <a href="seccion/3"><button type="btn" class="btn btn-primary btn-sm montserrat-btn">Crear</button></a>
                    @endif      
                                  
                </div> 

                  
          </div> 
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="box">
              <h3>Comerciales</h3>
                <div class="content">
                    <center><span class="fa-stack fa-5x">
                       <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text fa-inverse">4</strong>
                    </span></center>
                </div>

                <div class="ft">
                    @if(isset($analisiscomerciales))
                        <a href="seccion/4/edit/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>
                  @else
                        <a href="seccion/4"><button type="btn" class="btn btn-primary btn-sm montserrat-btn">Crear</button></a>
                  @endif     
                                  
                </div> 

                  
          </div>
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="box">
              <h3>Generales</h3>
                <div class="content">
                    <center><span class="fa-stack fa-5x">
                       <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text fa-inverse">5</strong>
                    </span></center>
                </div>

                <div class="ft">
                  @if(isset($generales))
                        <a href="seccion/5/edit/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>
                  @else
                        <a href="seccion/5"><button type="btn" class="btn btn-primary btn-sm montserrat-btn">Crear</button></a>
                  @endif   
                                  
                </div> 

                  
                  
          </div>
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="box">
              <h3>Mercados</h3>
                <div class="content">
                    <center><span class="fa-stack fa-5x">
                       <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text fa-inverse">6</strong>
                    </span></center>
                </div>

                <div class="ft">
                   @if(isset($mercados))
                        <a href="seccion/6/edit/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>
                  @else
                        <a href="seccion/6"><button type="btn" class="btn btn-primary btn-sm montserrat-btn">Crear</button></a>
                  @endif  
                                  
                </div> 
                 
                  
          </div>     
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="box">
              <h3>Vinculaciones</h3>
                <div class="content">
                    <center><span class="fa-stack fa-5x">
                       <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text fa-inverse ">7</strong>
                    </span></center>
                </div>

                <div class="ft">
                  @if(isset($vinculaciones))
                        <a href="seccion/7/edit/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>
                  @else
                        <a href="seccion/7"><button type="btn" class="btn btn-primary btn-sm montserrat-btn">Crear</button></a>
                  @endif 
                                  
                </div> 

                  
          </div>
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="box">
              <h3>Instituciones</h3>
                <div class="content">
                    <center><span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text fa-inverse">8</strong>
                    </span></center>
                </div>

                <div class="ft">
                        <a href="seccion/8"><button type="btn" class="btn btn-primary btn-sm montserrat-btn">Crear</button></a>

                        <a href="seccion/8/list/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>
                        
                </div> 

          </div>
        </div>


        <div class="col-md-3 col-lg-3">
          <div class="box">
              <h3>Trab. Detallados</h3>
                <div class="content">
                    <center><span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text fa-inverse">9</strong>
                    </span></center>
                </div>

                <div class="ft">
                  @if(isset($trabajosdetallados))
                        <a href="seccion/9/edit/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>
                  @else
                        <a href="seccion/9"><button type="btn" class="btn btn-primary btn-sm montserrat-btn">Crear</button></a>
                  @endif 
                                  
                </div> 

                  
          </div>
        </div>

        <div class="col-md-3 col-lg-3">
          <div class="box">
              <h3>Asesorías</h3>
                <div class="content">
                   <center><span class="fa-stack fa-5x">
                      <i class="fa fa-circle fa-stack-2x text-navy-blue"></i>
                      <strong class="fa-stack-1x fa-stack-text fa-inverse">10</strong>
                    </span></center>
                </div>

                <div class="ft">
                  @if(isset($asesorias))
                        <a href="seccion/10/edit/{{$proyecto->folio}}"><button type="btn" class="btn btn-success btn-sm montserrat-btn">Editar</button></a>
                  @else
                        <a href="seccion/10"><button type="btn" class="btn btn-primary btn-sm montserrat-btn">Crear</button></a>
                  @endif 
                                  
                </div> 

                  
          </div>
        </div>

          @endforeach
        @endif

      
      </div>
  </div>

  
</div>




@stop
