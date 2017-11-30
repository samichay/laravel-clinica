@extends('layouts/admin')
@section('body')
    <h3 class="contenido--titulo">
        Aqui se editara el paciente  {{$paciente->nombres}}
    </h3>
{{--     https://www.youtube.com/watch?v=SwZh2uodQ7c&index=14&list=PLIddmSRJEJ0u-5Nv2k6W8Vhe0wUP_7H5W
 --}}
	<br>
 	{!!Form::model($paciente,['route'=> ['paciente.update', $paciente], 'method'=>'PUT'])!!}
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

	{!!Form::submit('Actualizar',['class'=>'btn-primario'])!!}
	{!!Form::close()!!} 

	{{-- <div>
		<form action="/pacientes/actualizar" method="POST">
			{{ csrf_field() }}
		<div class="iniciar--campo">
			<br>
			<h5>Nombres</h5>
			<input class="input--formulario" type="text" name="nombre" placeholder="Nombre del paciente">
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>Apellidos</h5>
			<input class="input--formulario" type="text" name="apellidos" placeholder="apellidos del paciente">
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>Celular</h5>
			<input class="input--formulario" type="text" name="celular" placeholder="Celular del paciente">
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>DNI</h5>
			<input class="input--formulario" type="text" name="dni" placeholder="DNI del paciente">
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>Fecha de nacimiento</h5>
			<input class="input--formulario" type="text" name="fenacimiento" placeholder="la fecha de nacimiento">
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>Peso</h5>
			<input class="input--formulario" type="text" name="peso" placeholder="Peso del paciente">
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>Talla</h5>
			<input class="input--formulario" type="text" name="talla" placeholder="Talla del paciente">
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>Direccion</h5>
			<input class="input--formulario" type="text" name="direccion" placeholder="Direccion del paciente">
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>Estado Civil</h5>
			<input class="input--formulario" type="text" name="estcivil" placeholder="Estado civil">
		</div>
		<br>
		<button type="submit" class="btn-primario">Agregar</button>
		<br>
		</form>
	</div> --}}
@endsection
