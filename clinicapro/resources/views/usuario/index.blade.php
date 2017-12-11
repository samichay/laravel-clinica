@extends('layouts/admin')

@if(Session::has('message'))
<div class="alert alert-success alert-dismissable" role="alert">
    <a href="/usuario" class="close3" data-dismiss="alert" aria-label="close">&times;</a>
 {{Session::get('message')}}
</div>
@endif

@section('body')
<h3>Registro de usuarios</h3>
<br>
<hr></hr>
<br>
<br>
<div class="btn--aciones">
<a href="#modalregistrousuario" type="button" class="btn-primario">+ Nuevo usuario</a>
{!!Form::open(['route' => 'usuario.index', 'method' => 'GET', 'class'=> 'navbar-form navbar-left', 'role'=>'search']) !!}
      <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Nombre de usuario'])!!}
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
                    <th>Apellidos</th>
                    <th>Nick</th>
                    <th>Tipo de usuario</th>
                    <th>Editar</th>

                </tr>
            </thead>
            <tbody>
            	@foreach ($usuarios as $key => $usuario)
					<tr class="tabla--datos-fila">
						<th scope="row">{{$usuario->id_usuario}}</th>
						<td>{{$usuario->nombres}}</td>
						<td>{{$usuario->apellidos}}</td>
						<td>{{$usuario->nick}}</td>
						<td>{{$usuario->tipo_usuario}}	</td>
						<td>{!!link_to_route('usuario.edit', $title = 'create', $parameters = $usuario, $attributes = ['class'=>'material-icons btn-accion'])!!}
                        </td>
					</tr>
				@endforeach
            </tbody>
        </table>
        <br>
	{!!$usuarios->render()!!}
    </div>

</center>
    </div>
    </div>

<!-- inicio del modal -->
<div id="modalregistrousuario" class="modalDialog">

@include('request')
    <div>
        {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
        <a href="#close" title="Close" class="close">X</a>
        <h2>Nuevo usuario</h2>
        <div class="iniciar--campo">
            <h5>{!!Form::label('nombres','Nombres:')!!}</h5>
            {!!Form::text('nombres',null,['class'=>'input--formulario','placeholder'=>'Nombres del usuario'])!!}
        </div>
        <br>
        <div class="iniciar--campo">
            <h5>{!!Form::label('apellidos','Apellidos:')!!}</h5>
            {!!Form::text('apellidos',null,['class'=>'input--formulario','placeholder'=>'Apellidos del Usuario'])!!}
        </div>
        <br>
        <div class="iniciar--campo">
            <h5>{!!Form::label('nick','Nick:')!!}</h5>
            {!!Form::text('nick',null,['class'=>'input--formulario','placeholder'=>'Nick del usuario'])!!}
        </div>
        <br>
        <div class="iniciar--campo">
            <h5>{!!Form::label('tipo_usuario','Tipo de usuario:')!!}</h5>
            {!!Form::text('tipo_usuario',null,['class'=>'input--formulario','placeholder'=>'Tipo de usuario'])!!}
        </div>
        <br>
        {!!Form::submit('Agregar',['class'=>'btn-primario'])!!}
        {!!Form::close()!!}
    </div>
</div>
@endsection