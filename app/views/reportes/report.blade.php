 <table class="table">
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

               
  

              </table>