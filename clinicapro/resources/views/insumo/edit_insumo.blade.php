@extends('layouts/admin')
@section('body')
@include('request')
    <h3 class="contenido--titulo">
        Aqui se editara el insumo:  {{$insumo->nombre}}
    </h3>
{{--     https://www.youtube.com/watch?v=SwZh2uodQ7c&index=14&list=PLIddmSRJEJ0u-5Nv2k6W8Vhe0wUP_7H5W
 --}}
	<br>
 	{!!Form::model($insumo,['route'=> ['insumo.update', $insumo], 'method'=>'PUT'])!!}
		<div class="iniciar--campo">
			<h5>{!!Form::label('nombre','Nombre:')!!}</h5>
			{!!Form::text('nombre',null,['class'=>'input--formulario','placeholder'=>'Nombres del insumo'])!!}
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>{!!Form::label('stock','Stock:')!!}</h5>
			{!!Form::text('stock',null,['class'=>'input--formulario','placeholder'=>'Stock actual'])!!}
		</div>
		<br>
		<div class="iniciar--campo">
			<h5>{!!Form::label('descripcion','Descripcion:')!!}</h5>
			{!!Form::text('descripcion',null,['class'=>'input--formulario','placeholder'=>'Descripcion del insumo'])!!}
		</div>
		<br>
	{!!Form::submit('Actualizar',['class'=>'btn-primario'])!!}
	{!!Form::close()!!} 
	<br>
	{!!Form::open(['route'=>['insumo.destroy', $insumo], 'method' => 'DELETE'])!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@endsection
