@extends('layouts/admin')
@section('body')
@include('request')
    <h3 class="contenido--titulo">
        Edicion de la atencion de tipo {{$atencion->tipoatencion->descripcion}}
    </h3>

@php
switch ($atencion->id_tipo) {
case 1:
    @endphp
	   <div>
			{!!Form::model($atencion->Papanicolao,['route'=> ['atencion.update', $atencion], 'method'=>'PUT'])!!} 
	        <h6>(*) Campos obligatorios</h6>
			<br>
			<div style="float: left; position: relative; width: 40%;">
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('id_muestra','Muestra:')!!}</h5>
	            {!!Form::select('id_muestra',$tipo_muestra,null,['class'=>'input--formulario'])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('hijos','Hijos:')!!}</h5>
	            {!!Form::number('hijos',null,['class'=>'input--formulario','placeholder'=>'Hijos'])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('fecha_entrega','Fecha de entrega:')!!}</h5>
	            {!!Form::date('fecha_entrega',null,['class'=>'input--formulario','placeholder'=>'Fecha de entrega'])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('fecha_recepcion','Fecha de recepcion:')!!}</h5>
	            {!!Form::date('fecha_recepcion',null,['class'=>'input--formulario','placeholder'=>'Fecha de recepcion'])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('precio','Precio:')!!}</h5>
	            {!!Form::number('precio',$atencion->precio,['class'=>'input--formulario','placeholder'=>'Precio'])!!}
	        </div>
	        </div>
	        <div style="float: right;position: relative; width: 40%;">

	        <div class="iniciar--campo">
	            <h5>{!!Form::label('fecha_envio','Fecha de Envio:')!!}</h5>
	            {!!Form::date('fecha_envio',null,['class'=>'input--formulario','placeholder'=>'Fecha de Envio'])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
            <h5>{!!Form::label('estado','Estado:')!!}</h5>
            {!!Form::select('estado',['Disponible','Entregado','No Entregado'],null,['class'=>'input--formulario'])!!}
        	</div>
			<br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('laboratorio','Laboratorio:')!!}</h5>
	            {!!Form::text('laboratorio',null,['class'=>'input--formulario','placeholder'=>'Laboratorio'])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('fecha_periodo','Fecha de Periodo:')!!}</h5>
	            {!!Form::date('fecha_periodo',null,['class'=>'input--formulario','placeholder'=>'Fecha de Periodo'])!!}
	        </div>
	        </div>
	        	        <br>	        <br>
	        <div style="float: left; width: 100%;">
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('observaciones','Observaciones:')!!}</h5>
	            {!!Form::textarea('observaciones',$atencion->observaciones,['class'=>'input--formulario','placeholder'=>'Ingrese las observaciones... '])!!}
	        </div>
	        <br>

	        {!!Form::submit('Actualizar',['class'=>'btn-primario'])!!}
	        </div>
			{!!Form::close()!!}
	    </div>
    @php
    break;
case 2:
    @endphp
	   <div>
			{!!Form::model($atencion,['route'=> ['atencion.update', $atencion], 'method'=>'PUT'])!!} 
	        <h6>(*) Campos obligatorios</h6>
		<div style="float: left; position: relative; width: 40%;">

	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('descripcion','Descripcion:')!!}</h5>
	            {!!Form::text('descripcion',$atencion->otros->descripcion,['class'=>'input--formulario','placeholder'=>'Ingrese la descripcion '])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('precio','Precio:')!!}</h5>
	            {!!Form::number('precio',null,['class'=>'input--formulario','placeholder'=>'Precio'])!!}
	        </div>
	    </div>
	    <div style="float: left; width: 100%;">
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('observaciones','Observaciones:')!!}</h5>
	            {!!Form::textarea('observaciones',null,['class'=>'input--formulario','placeholder'=>'Ingrese las observaciones... '])!!}
	        </div>

	        <br>
	        {!!Form::submit('Actualizar',['class'=>'btn-primario'])!!}
	    </div>
			{!!Form::close()!!}
	    </div>
    @php
    break;
case 3:
    @endphp
    	   <div>
			{!!Form::model($atencion->pfamiliar,['route'=> ['atencion.update', $atencion], 'method'=>'PUT'])!!} 
	        <h6>(*) Campos obligatorios</h6>
		<div style="float: left; position: relative; width: 40%;">

	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('id_Metodo','Metodo:')!!}</h5>
	            {!!Form::select('id_Metodo',$tipo_metodo,$atencion->pfamiliar->metodo->Metodocol,['class'=>'input--formulario'])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('id_Estado','Estado:')!!}</h5>
	            {!!Form::select('id_Estado',$tipo_estado,$atencion->pfamiliar->estado->nombre,['class'=>'input--formulario'])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('fecha_programada','Fecha Programada:')!!}</h5>
	            {!!Form::date('fecha_programada',null,['class'=>'input--formulario','placeholder'=>'Fecha Programada'])!!}
	        </div>
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('precio','Precio:')!!}</h5>
	            {!!Form::number('precio',$atencion->precio,['class'=>'input--formulario','placeholder'=>'Precio'])!!}
	        </div>
	    </div>
	        <div style="float: left; width: 100%;">
	        <br>
	        <div class="iniciar--campo">
	            <h5>{!!Form::label('observaciones','Observaciones:')!!}</h5>
	            {!!Form::textarea('observaciones',$atencion->observaciones,['class'=>'input--formulario','placeholder'=>'Ingrese las observaciones... '])!!}
	        </div>
	        <br>
	        {!!Form::submit('Actualizar',['class'=>'btn-primario'])!!}
	    	</div>
			{!!Form::close()!!}
	    </div>
    @php
    break;
}
@endphp
@endsection