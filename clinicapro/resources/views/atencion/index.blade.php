@extends('layouts.admin')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissable" role="alert">
	<a href="/paciente" class="close3" data-dismiss="alert" aria-label="close">&times;</a>
 {{Session::get('message')}}
</div>
@endif
@section('body')
<h1>Registro de atenciones</h1>
<br>
<br>
<a href="#modalregistroatencion" type="button" class="btn-primario">Nueva atención</a>
<br>
<br>
<br> 
<center>
    <div class="tabla">
        <table class="tabla--datos">
            <thead class="titulo">
                <tr>
                    <th>#</th>
                    <th>Fecha de atencion</th>
                    <th>Hora de atencion</th>
                    <th>Observaciones</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                    <th>Paciente</th>
                    <th>Usuario</th>
                    <th>Operaciones</th>

                </tr>
            </thead>
            <tbody>
            	@foreach ($atenciones as $key => $atencion)
					<tr class="tabla--datos-fila">
						<th scope="row">{{$atencion->id_atencion}}</th>
						<td>{{$atencion->fecha_atencion}}</td>
						<td>{{$atencion->hora_atencion}}</td>
						<td>{{$atencion->observaciones}}	</td>
						<td>{{$atencion->precio}}	</td>
						<td>{{$atencion->id_tipo}}	</td>
						<td>{{$atencion->id_paciente}}	</td>
						<td>{{$atencion->id_usuario}}	</td>
						<td>{!!link_to_route('atencion.edit', $title = 'Edit', $parameters = $atencion, $attributes = ['class'=>'btn-primario'])!!}
                        </td>
					</tr>
				@endforeach
            </tbody>
        </table>
        <br>
	{!!$atenciones->render()!!}
    </div>
    
</center>
</div>
</div>
<div id="modalregistroatencion" class="modalDialog">
@include('request')
    <div>
        {!!Form::open(['route'=>'atencion.store', 'method'=>'POST'])!!}   
        <a href="atencion" title="Close" class="close">X</a>
        <center><h2>Nueva atención</h2></center>
        <br>
        <h6>(*) Campos obligatorios</h6>
        <br>
        <div>
            <h5>{!!Form::label('id_usuario','(*) Usuario:')!!}</h5>
            {!!Form::text('id_usuario',null,['class'=>'input--formulario','placeholder'=>'Usuario'])!!}
        </div>
        <br>
        <div>
            <h5>{!!Form::label('id_paciente','(*) Paciente:')!!}</h5>
            {!!Form::text('id_paciente',null,['class'=>'input--formulario','placeholder'=>'Paciente'])!!}
        </div>
        <br>
        <div>
            <h5>{!!Form::label('id_tipo','(*) Tipo:')!!}</h5>
            {!!Form::text('id_tipo',null,['class'=>'input--formulario','placeholder'=>'Tipo de atención'])!!}
        </div>
        <br>
        <div>
            <h5>{!!Form::label('precio','Precio:')!!}</h5>
            {!!Form::text('precio',null,['class'=>'input--formulario','placeholder'=>'Precio'])!!}
        </div>
        <br>
        <div>
            <h5>{!!Form::label('observaciones','Observaciones:')!!}</h5>
            {!!Form::textarea('observaciones',null,['class'=>'input--formulario','placeholder'=>'Ingrese las observaciones... '])!!}
        </div>
        <br>
        {!!Form::submit('Agregar',['class'=>'btn-primario'])!!}
		{!!Form::close()!!}
    </div>
    </div>
@endsection