@extends('layouts/admin')

@if(Session::has('message')) 
<div class="alert alert-success alert-dismissable" role="alert">
	<a href="/paciente" class="close3" data-dismiss="alert" aria-label="close">&times;</a>
 {{Session::get('message')}}
</div>
@endif
@section('body')
	        	<h3 class="contenido--titulo">
                    Registro de Pacientes
                </h3>
				<br>
				<hr></hr>
                <br><br>
				<div class="btn--aciones">
				<a href="#modalregistropaciente" type="button" class="btn-primario">+ Nuevo Paciente</a>
				{!!Form::open(['route' => 'paciente.index', 'method' => 'GET', 'class'=> 'navbar-form navbar-left', 'role'=>'search']) !!}
					<div class="form-group">
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Nombre de paciente'])!!}
					</div>
					<button type="submit" class="btn btn-default">Buscar</button>
				{!! Form::close() !!}
				</div>
                	
                <br><br><br>
                <center>
                    <div class="tabla">
                        <table class="tabla--datos">
                            <thead class="titulo">
                                <tr>
                                    <th>#</th>
                                    <th>Nombres</th>
                                    <th>Celular</th>
                                    <th>DNI</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($pacientes as $key => $paciente)
									<tr class="tabla--datos-fila">
										<th scope="row">{{$paciente->id_paciente}}</th>
										<td>{{$paciente->nombres}}</td>
										<td>{{$paciente->celular}}</td>
										<td>{{$paciente->dni}}	</td>
										<td>{!!link_to_route('paciente.edit', $title = 'create', $parameters = $paciente, $attributes = ['class'=>'material-icons btn-accion'])!!}{{-- 
											<a href="paciente.edit" type="button" class="btn-accion">Edit</a> --}}
	                                    </td>
									</tr>
								@endforeach
                            </tbody>
                        </table>
                        <br>
					{!!$pacientes->render()!!}
                    </div>

                </center>
            </div>
        </div>
        <!-- finb del contenido -->
        <!-- inicio del modal -->
        <div id="modalregistropaciente" class="modalDialog">

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
		</div>
        <!-- fin del modal -->
@endsection