@extends('layouts.admin')
@section('body')
<h1>Esta es la ventana de insumos</h1>
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
@endsection