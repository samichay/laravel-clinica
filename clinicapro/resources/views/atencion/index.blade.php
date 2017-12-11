@extends('layouts.admin')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissable" role="alert">
	<a href="/paciente" class="close3" data-dismiss="alert" aria-label="close">&times;</a>
 {{Session::get('message')}}
</div>
@endif
@section('body')
    {!!Form::open(['route' => 'atencion.index', 'method' => 'GET', 'class'=> 'navbar-form navbar-left', 'role'=>'search']) !!}
      <div class="form-group">
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Precio'])!!}
      </div>
      <button type="submit" class="btn btn-default">Buscar</button>
    {!! Form::close() !!}
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
                <?php $cont=1;?>
            	@foreach ($atenciones as $key => $atencion)
					<tr class="tabla--datos-fila">
						<th scope="row">{{$cont}}</th>
						<td>{{$atencion->fecha_atencion}}</td>
						<td>{{$atencion->hora_atencion}}</td>
						<td>{{$atencion->observaciones}}	</td>
						<td>{{$atencion->precio}}	</td>
                        <td>{{$atencion->tipoatencion->descripcion}}    </td>
                        <td>{{$atencion->pacientes->nombres}}   </td>
                        <td>{{$atencion->usuarios->nick}}    </td>
						<td>{!!link_to_route('atencion.edit', $title = 'Edit', $parameters = $atencion, $attributes = ['class'=>'btn-primario'])!!}
                        </td>
					</tr>
                    <?php $cont++;?>
				@endforeach
            </tbody>
        </table>
        <br>
	{!!$atenciones->render()!!}
    </div>
    
</center>
</div>
</div>
<div  id="modalregistroatencion" class="modalDialog">
@include('request')
    <div>
        {!!Form::open(['route'=>'atencion.store', 'method'=>'POST'])!!}   
        <a href="atencion" title="Close" class="close">X</a>
        <center><h2>Nueva atención</h2></center>
        <br>
        <h6>(*) Campos obligatorios</h6>
        <br>
        <div>
            <h5>{!!Form::label('id_tipo','(*) Tipo:')!!}</h5>
            {!!Form::select('id_tipo', $tipo_atenciones, 2,['class'=>'input--formulario','onchange'=>'veroferta(this.value)'])!!}
        </div>
        <br>
        <div >
            <h5>{!!Form::label('id_paciente','(*) Paciente:')!!}</h5>
            {!!Form::select('id_paciente',$nombre_pac)!!}
        </div>
        <br>
        <div>
            <h5>{!!Form::label('precio','Precio:')!!}</h5>
            {!!Form::number('precio',null,['class'=>'input--formulario','placeholder'=>'Precio'])!!}
        </div>
    <div id="formotros">
        <br>
                <h5>{!!Form::label('descripcion','Descripcion:')!!}</h5>
                {!!Form::text('descripcion',null,['class'=>'input--formulario','placeholder'=>'Ingrese la descripcion '])!!}
                
    </div> <br>
    <div id="formpapanicolao" style="display: none;">
        <div>
            <h5>{!!Form::label('id_muestra','Muestra:')!!}</h5>
            {!!Form::select('id_muestra',$tipo_muestra,null,['class'=>'input--formulario'])!!}
        </div>        <br>
        <div>
            <h5>{!!Form::label('hijos','Hijos:')!!}</h5>
            {!!Form::number('hijos',null,['class'=>'input--formulario','placeholder'=>'Hijos'])!!}
        </div>        <br>
        <div>
            <h5>{!!Form::label('fecha_entrega','Fecha de entrega:')!!}</h5>
            {!!Form::date('fecha_entrega',null,['class'=>'input--formulario','placeholder'=>'Fecha de entrega'])!!}
        </div>        <br>
        <div>
            <h5>{!!Form::label('fecha_recepcion','Fecha de recepcion:')!!}</h5>
            {!!Form::date('fecha_recepcion',null,['class'=>'input--formulario','placeholder'=>'Fecha de recepcion'])!!}
        </div>        <br>
        <div>
            <h5>{!!Form::label('fecha_envio','Fecha de Envio:')!!}</h5>
            {!!Form::date('fecha_envio',null,['class'=>'input--formulario','placeholder'=>'Fecha de Envio'])!!}
        </div>        <br>
        <div>
            <h5>{!!Form::label('estado','Estado:')!!}</h5>
            {!!Form::select('estado',['Disponible','Entregado','No Entregado'],null,['class'=>'input--formulario'])!!}
        </div>        <br>
        <div>
            <h5>{!!Form::label('laboratorio','Laboratorio:')!!}</h5>
            {!!Form::text('laboratorio',null,['class'=>'input--formulario','placeholder'=>'Laboratorio'])!!}
        </div>        <br>
        <div>
            <h5>{!!Form::label('fecha_periodo','Fecha de Periodo:')!!}</h5>
            {!!Form::date('fecha_periodo',null,['class'=>'input--formulario','placeholder'=>'Fecha de Periodo'])!!}
        </div>        <br>
</div>

<div id="formpfamilia" style="display: none;">
        <div>
            <h5>{!!Form::label('id_Metodo','Metodo:')!!}</h5>
            {!!Form::select('id_Metodo',$tipo_metodo,null,['class'=>'input--formulario'])!!}
        </div>        <br>
        <div>
            <h5>{!!Form::label('id_Estado','Estado:')!!}</h5>
            {!!Form::select('id_Estado',$tipo_estado,null,['class'=>'input--formulario'])!!}
        </div>        <br>
        <div>
            <h5>{!!Form::label('fecha_programada','Fecha Programada:')!!}</h5>
            {!!Form::date('fecha_programada',null,['class'=>'input--formulario','placeholder'=>'Fecha Programada'])!!}
        </div>        <br>
</div>
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
