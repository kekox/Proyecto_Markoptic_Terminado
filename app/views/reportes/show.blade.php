@extends('layout.master')
@section('title')
:: Dashboard
@stop 
 
@section('contenido')

<section>
        <div class="col-lg-8 col-lg-offset-2">
            <table class="table table-bordered space" style="width:100%">
                <br>
                <caption><strong><center>Reporte de proyecto</center></strong></caption>
                <tr>
                  <th class="montserrat schema-purple text-white"><center>Concepto</center></th>
                  <th class="montserrat schema-purple text-white"><center>¿Como?</center></th> 
                </tr>
                
                @if(isset($proyectos))
                  @foreach($proyectos as $proyecto)
                   
                <tr>
                  <td class="schema-white">Título del proyecto</td>
                  <td class="schema-white">{{$proyecto->nombre_proyecto}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Modalidad</td>
                  <td class="schema-white">{{$proyecto->modalidad}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Tipo de propuesta</td>
                  <td class="schema-white">{{$proyecto->tipo_de_proyecto}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Contextualización</td>
                  <td class="schema-white">{{$proyecto->contextualizacion}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Propuesta apoyada en otra convocatoria</td>
                  <td class="schema-white">{{$proyecto->propuesta}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Área industrial del proyecto</td>
                  <td class="schema-white">{{$proyecto->area_industrial}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Área de conocimiento</td>
                  <td class="schema-white">{{$proyecto->area_conocimiento}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Palabras clave</td>
                  <td class="schema-white">{{$proyecto->palabras_clave}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Descripción/ Tipo de Innovación</td>
                  <td class="schema-white">{{$proyecto->descripcion_innovacion}} </td> 
                </tr>

                 <tr>
                  <td class="schema-white">¿Qué tipo de innovación plantea el proyecto?</td>
                  <td class="schema-white"></td> 
                </tr>

                 <tr>
                  <td class="schema-white">¿Cuál es el grado de la innovación planteada?</td>
                  <td class="schema-white">{{$proyecto->grado_innovacion}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">¿Qué tipo de mercado atenderá?</td>
                  <td class="schema-white">{{$proyecto->tipo_mercado}}</td> 
                </tr>
                   @endforeach
                @endif
                 <!-- Termina proyectos -->

                 <!-- Empiezan descripciones -->
                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Descripciones</center></td>
                </tr>
                  @if(isset($descripciones))
                    @foreach($descripciones as $proyecto)
                 <tr>
                  <td class="schema-white">Breve descripción de la propuesta</td>
                  <td class="schema-white">{{$proyecto->descripcion_propuesta}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Enumere y describa las principales actividades a desarrollar (posteriormente deberá calendarizarlas) en el Plan de Trabajo)</td>
                  <td class="schema-white">{{$proyecto->principales_actividades}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Enumere y describa los principales entregables comprometidos.</td>
                  <td class="schema-white">{{$proyecto->principales_entregables}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Objetivo general</td>
                  <td class="schema-white">{{$proyecto->objetivo_gral}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Resultados esperados</td>
                  <td class="schema-white">{{$proyecto->resultados_esperados}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Descripción de cómo se enmarca en la estrategia tecnológica de la empresa</td>
                  <td class="schema-white">{{$proyecto->descripcion_estrategica_tec}}</td> 
                </tr>
                @endforeach
                @endif
                <!-- Terminan Descripciones -->

                <!-- Empiezan Analisis Ternicos -->
                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Análisis Técnicos</center></td>
                </tr>

                @if(isset($analisistecnicos))
                    @foreach($analisistecnicos as $proyecto)
                 <tr>
                  <td class="schema-white">Antecedentes</td>
                  <td class="schema-white">{{$proyecto->antecedentes}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Estado de la Técnica 1</td>
                  <td class="schema-white">{{$proyecto->edo_tec_1}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Estado de la Técnica 2</td>
                  <td class="schema-white">{{$proyecto->edo_tec_2}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Estado de la Técnica 3</td>
                  <td class="schema-white">{{$proyecto->edo_tec_3}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Estado de la Técnica 4</td>
                  <td class="schema-white">{{$proyecto->edo_tec_4}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Estado de la Técnica 5</td>
                  <td class="schema-white">{{$proyecto->edo_tec_5}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Especificar cuál es la fuente de origen de la tecnología (p.e desarrollo interno, adquisición, transferencia de otra empresa o institución académica)</td>
                  <td class="schema-white">{{$proyecto->origen_de_la_tecnologia}}</td> 
                </tr>

                  @endforeach
                @endif
                <!-- Terminan analisis tecnicos -->

                <!-- Empiezan analisis comerciales -->
                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Análisis Comerciales</center></td>
                </tr>

                @if(isset($analisiscomerciales))
                    @foreach($analisiscomerciales as $proyecto)
                 <tr>
                  <td class="schema-white">Características de la empresa</td>
                  <td class="schema-white">{{$proyecto->caracteristicas_empresa}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Funciones críticas de administración</td>
                  <td class="schema-white">{{$proyecto->funciones_criticas}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Experiencia del personal </td>
                  <td class="schema-white">{{$proyecto->experiencia_personal}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Récord de éxito en comercialización de proyectos y otras investigaciones</td>
                  <td class="schema-white">{{$proyecto->record_de_exito}}</td> 
                </tr>

                  @endforeach
                @endif
                <!-- Terminan analisis comerciales -->

                <!-- Empiezan general -->
                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Proyecto</center></td>
                </tr>

                 @if(isset($generales))
                    @foreach($generales as $proyecto)
                 <tr>
                  <td class="schema-white">Nivel de Desarrollo de la Tecnología</td>
                  <td class="schema-white">{{$proyecto->nivel_de_tecnologia}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Nivel de innovación del producto, proceso o servicio.</td>
                  <td class="schema-white">{{$proyecto->nivel_de_innovacion}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Riesgo técnico del proyecto.</td>
                  <td class="schema-white">{{$proyecto->riesgo_tecnico}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">El principal resultado técnico y comercial del proyecto.</td>
                  <td class="schema-white">{{$proyecto->principal_resultado}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Visión general del presupuesto del proyecto.</td>
                  <td class="schema-white">{{$proyecto->presupuesto_de_proyecto}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Administración del proyecto</td>
                  <td class="schema-white">{{$proyecto->administracion_del_proyecto}}</td> 
                </tr>
                
                <tr>
                  <td class="schema-white">Disponibilidad y competitividad de la empresa</td>
                  <td class="schema-white">{{$proyecto->disponibilidad_y_compatibilidad}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Plan de protección industrial vislumbrado</td>
                  <td class="schema-white">{{$proyecto->plan_de_proteccion}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Medios de generación de ingresos</td>
                  <td class="schema-white">{{$proyecto->generacion_de_ingresos}}</td> 
                </tr>

                  @endforeach
                @endif
                <!-- Terminan Generales -->

                 <!-- Empiezan Mercado -->
                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Mercado</center></td>
                </tr>
                
                @if(isset($mercados))
                    @foreach($mercados as $proyecto)
                 <tr>
                  <td class="schema-white">Mercado del nuevo producto</td>
                  <td class="schema-white">{{$proyecto->mercado}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Modelo de negocio y aceptación en el mercado</td>
                  <td class="schema-white">{{$proyecto->modelo_de_negocio}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Precio del producto (pesos).</td>
                  <td class="schema-white">{{$proyecto->precio}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Proyecciones de mercado</td>
                  <td class="schema-white">{{$proyecto->proyecciones}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Enfoque de inserción en el mercado</td>
                  <td class="schema-white">{{$proyecto->enfoque_de_insercion}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Cliente objetivo</td>
                  <td class="schema-white">{{$proyecto->cliente_objetivo}}</td> 
                </tr>
                
                <tr>
                  <td class="schema-white">Descripción de los beneficios sociales, educativos o científicos.</td>
                  <td class="schema-white">{{$proyecto->beneficios}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Competencia</td>
                  <td class="schema-white">{{$proyecto->competencia}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Patentes similares al producto o servicio propuesto por la empresa</td>
                  <td class="schema-white">{{$proyecto->patentes_similares}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Barreras</td>
                  <td class="schema-white">{{$proyecto->barreras}}</td> 
                </tr>

                  @endforeach
                @endif
                <!-- Terminan Mercados -->

                 <!-- Empiezan Vinculacion -->
                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Vinculación/Alianzas estratégicas</center></td>
                </tr>

                 @if(isset($vinculaciones))
                    @foreach($vinculaciones as $proyecto)

                <tr>
                  <td class="schema-white">1. Razones que justifiquen la asociación</td>
                  <td class="schema-white">{{$proyecto->razones}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">2. La empresa Proponente o algunos de los integrantes de la Red cuentan con experiencia en sinergias de marketing.</td>
                  <td class="schema-white">{{$proyecto->sinergias_marketing}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">3. La Empresa Proponente o algunos de los integrantes de la Red cuentan con experiencia en sinergias tecnológicas.</td>
                  <td class="schema-white">{{$proyecto->sinergias_tecnologias}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">4. La Empresa Proponente o algunos de los integrantes de la Red cuentan con experiencia en sinergias de producción/procesamiento.</td>
                  <td class="schema-white">{{$proyecto->sinergias_produccion}}</td> 
                </tr>

                
                  @endforeach
                @endif
                <!-- Terminan Vinculaciones -->

                <!-- Empiezan Institucion -->
                @if(isset($instituciones))
                  @foreach($instituciones as $proyecto)
                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Instituciones Participantes</center></td>
                </tr>
               

                 <tr>
                  <td class="schema-white">Registro</td>
                  <td class="schema-white">{{$proyecto->registro}}</td> 
                </tr>

                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Tipología de la vinculación (PEI)</center></td>
                </tr>
                  
                   <tr>
                    <td class="schema-white">¿La vinculación contempla el uso de infraestructura de laboratorio u otro equipamiento de la institución vinculada?</td>
                    <td class="schema-white">{{$proyecto->equipamento}}</td> 
                  </tr>

                   <tr>
                    <td class="schema-white">¿La vinculación incluye actividades de diseño y prototipado?</td>
                    <td class="schema-white">{{$proyecto->diseño_o_prototipo}}</td> 
                  </tr>

                   <tr>
                    <td class="schema-white">¿La vinculación requiere la realización de ensayos, peritajes, caracterizaciones, validaciones, pruebas funcionales, etc.?</td>
                    <td class="schema-white">{{$proyecto->realizaciones}}</td> 
                  </tr>

                   <tr>
                    <td class="schema-white">¿La vinculación implica escalamientos a planta piloto?</td>
                    <td class="schema-white">{{$proyecto->escalamiento_piloto}}</td> 
                  </tr>

                   <tr>
                    <td class="schema-white">¿La vinculación considera la creación de un grupo de trabajo conjunto entre personal de la empresa y la institución vinculada?</td>
                    <td class="schema-white">{{$proyecto->grupo_trabajo_vinculacion}}</td> 
                  </tr>

                   <tr>
                    <td class="schema-white">¿La vinculación considera la creación de un grupo de trabajo conjunto entre personal de la empresa y la institución vinculada?</td>
                    <td class="schema-white">{{$proyecto->esquema}}</td> 
                  </tr>

                   <tr>
                    <td class="schema-white">Describa actividades a desarrollar</td>
                    <td class="schema-white">{{$proyecto->descripcion_actividades}}</td> 
                  </tr>

                   <tr>
                    <td class="schema-white">Entregables comprometidos</td>
                    <td class="schema-white">{{$proyecto->entregables}}</td> 
                  </tr>

                   <tr>
                    <td class="schema-white">Descripción de la participación</td>
                    <td class="schema-white">{{$proyecto->descripcion_participacion}}</td> 
                  </tr>
                  
                   <tr>
                    <td class="schema-white">Datos de contacto del personal responsable con la presente propuesta de esta institución.</td>
                    <td class="schema-white">{{$proyecto->informacion_contacto}}</td> 
                  </tr>

                  <tr>
                    <td class="schema-white">Grupo de Trabajo del Proyecto</td>
                    <td class="schema-white">{{$proyecto->grupo_de_trabajo}}</td> 
                  </tr>

                  <tr>
                    <td class="schema-white">Grado Académico (de cada participante en el proyecto)</td>
                    <td class="schema-white">{{$proyecto->grado_academico}}</td> 
                  </tr>

                  <tr>
                    <td class="schema-white">Producto que generará (cada uno de los participantes)</td>
                    <td class="schema-white">{{$proyecto->producto}}</td> 
                  </tr>

                  <tr>
                    <td class="schema-white">Información relevante del participante ( de cada uno de los participantes en el proyecto)</td>
                    <td class="schema-white">{{$proyecto->informacion_participante}}</td> 
                  </tr>

                  <tr>
                    <td class="schema-white">Actividades específicas que realizará dentro del  proyecto (de cada participante en el proyecto)</td>
                    <td class="schema-white">{{$proyecto->actividades_especificos}}</td> 
                  </tr>

                

                  @endforeach
                @endif
                <!-- Termina Institucion -->

                <!-- Empieza Trabajo Detallado-->
                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Plan de Trabajo Detallado</center></td>
                </tr>

                @if(isset($trabajosdetallados))
                    @foreach($trabajosdetallados as $proyecto)

                <tr>
                  <td class="schema-white">Descripción general del plan de trabajo para el ciclo fiscal</td>
                  <td class="schema-white">{{$proyecto->plan_de_trabajo}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Descripción y justificación de las actividades</td>
                  <td class="schema-white">{{$proyecto->desc_justificacion_actividades}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Productos de la etapa</td>
                  <td class="schema-white">{{$proyecto->producto_etapa}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">Descripción de las etapas posteriores</td>
                  <td class="schema-white">{{$proyecto->desc_etapas}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Presupuesto</td>
                  <td class="schema-white">{{$proyecto->presupuesto}}</td> 
                </tr>

                  @endforeach
                @endif
                <!-- Terminan Plan de trabajo detallado -->

                <!-- Empieza Asesorias-->
                <tr>
                  <td class="montserrat schema-yellow text-black" colspan="2"><center>Asesoría/consultoría</center></td>
                </tr>

                 @if(isset($asesorias))
                    @foreach($asesorias as $proyecto)

                <tr>
                  <td class="schema-white">PREGUNTA 1: ¿En la formulación de su propuesta, recibió asesoría/consultoría de un tercero (Despacho, Oficina de Transferencia de Tecnología, Centro de Patentamiento, IES, CI)?</td>
                  <td class="schema-white">{{$proyecto->pregunta_1}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">PREGUNTA 2: Indique la entidad que la auxilió en el desarrollo y llenado de la propuesta; favor de seleccionarlo de acuerdo a su RENIECYT.</td>
                  <td class="schema-white">{{$proyecto->pregunta_2}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">PREGUNTA 3: Selecciones las etapas de las propuestas en las que participó o participará la entidad que brindó la asesoría.</td>
                  <td class="schema-white">{{$proyecto->pregunta_3}}</td> 
                </tr>

                 <tr>
                  <td class="schema-white">PREGUNTA 4: ¿La entidad que le auxilió en la preparación y llenado de la propuesta le cobrará honorarios?</td>
                  <td class="schema-white">{{$proyecto->pregunta_4}}</td> 
                </tr>

                <tr>
                  <td class="schema-white">Responsables del Proyecto</td>
                  <td class="schema-white">{{$proyecto->responsable_del_proyecto}}</td> 
                </tr>

                  @endforeach
                @endif
  

              </table>

              

        </div>
              
              
                 


</section>

@stop