@extends('layouts/admin')

@if(Session::has('message')) 
<div class="alert alert-success alert-dismissable" role="alert">
	<a href="/reportes" class="close3" data-dismiss="alert" aria-label="close">&times;</a>
 {{Session::get('message')}}
</div>
@endif
@section('body')
		  {{-- <div class="form-group">
	  	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Nombre de paciente'])!!}
	  </div>
	  <button type="submit" class="btn btn-default">Buscar</button> --}}
	{{-- {!! Form::close() !!} --}}
	
	        	<br>
	        	<br>
	        	<br>
	        	<h1 class="contenido--titulo">
                    Reportes del Sistema
                </h1>
                <br><br>
                {{-- <a href="#modalregistropaciente" type="button" class="btn-primario">+ Nuevo Paciente</a> --}}	
                
                <center>
                    <div class="tabla">
                        <table class="tabla--datos">
                            <thead class="titulo">
                                <tr>
                                    <th>ID</th>
                                    <th>Reportes</th>
                                    <th>Ver</th>
                                    <th>Descargar</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                    		<tr>
                      			<td>1</td>
                      			<td>Reporte de Pacientes registrados</td>
                      			<td><a href="crear_reporte_pacientes/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      			<td><a href="crear_reporte_pacientes/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                    
                    		</tr>
                    		<tr>
                      			<td>2</td>
                      			<td>Reporte de Insumos</td>
                      			<td><a href="crear_reporte_insumos/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                      			<td><a href="crear_reporte_insumos/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                      			{{-- <td><a href="crear_reporte_insumos_privado/3/5" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td> --}}


                    
                    		</tr>
                   
                  </tbody>
                        </table>
                        <br>
					</div>

                </center>
            </div>
        </div>
        <!-- finb del contenido -->
        <!-- inicio del modal -->
        {{-- <div id="modalregistropaciente" class="modalDialog">

		@include('request')
			<div>
				{!!Form::open(['route'=>'paciente.store', 'method'=>'POST'])!!}
				<a href="#close" title="Close" class="close">X</a>
				<h2>Nuevo paciente</h2>
				<div class="iniciar--campo">
					<h5>{!!Form::label('nombres','Nombres:')!!}</h5>
					{!!Form::text('nombres',null,['class'=>'input--formulario','placeholder'=>'Nombres del paciente'])!!}
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>{!!Form::label('apellidos','Apellidos:')!!}</h5>
					{!!Form::text('apellidos',null,['class'=>'input--formulario','placeholder'=>'Apellidos del paciente'])!!}
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>{!!Form::label('celular','Celular:')!!}</h5>
					{!!Form::text('celular',null,['class'=>'input--formulario','placeholder'=>'Celular del paciente'])!!}
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>{!!Form::label('dni','DNI:')!!}</h5>
					{!!Form::text('dni',null,['class'=>'input--formulario','placeholder'=>'DNI del paciente'])!!}
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>{!!Form::label('fenacimiento','Fecha de nacimiento:')!!}</h5>
					{!!Form::text('fenacimiento',null,['class'=>'input--formulario','placeholder'=>'La fecha de nacimiento'])!!}
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>{!!Form::label('peso','Peso:')!!}</h5>
					{!!Form::text('peso',null,['class'=>'input--formulario','placeholder'=>'Peso del paciente'])!!}
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>{!!Form::label('talla','Talla:')!!}</h5>
					{!!Form::text('talla',null,['class'=>'input--formulario','placeholder'=>'Talla del paciente'])!!}
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>{!!Form::label('direccion','Direccion:')!!}</h5>
					{!!Form::text('direccion',null,['class'=>'input--formulario','placeholder'=>'Direccion del paciente'])!!}
				</div>
				<br>
				<div class="iniciar--campo">
					<h5>{!!Form::label('estcivil','Estado civil:')!!}</h5>
					{!!Form::text('estcivil',null,['class'=>'input--formulario','placeholder'=>'Estado civil'])!!}
				</div>
				<br>
				{!!Form::submit('Agregar',['class'=>'btn-primario'])!!}
				{!!Form::close()!!}
			</div>
		</div> --}}
        <!-- fin del modal -->
@endsection