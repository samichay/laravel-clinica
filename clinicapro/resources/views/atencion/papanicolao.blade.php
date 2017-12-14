@extends('layouts/admin')
@section('body')
<center>
    <div class="tabla">
        <table class="tabla--datos">
            <thead class="titulo">
                <tr>
                    <th>#</th>
                    <th>Muestra</th>
                    <th>Fecha periodo</th>
                    <th>Hijos</th>
                    <th>Fecha entrega</th>
                    <th>Fecha recepcion</th>
                    <th>Fecha envio</th>
                    <th>Estado</th>
                    <th>Laboratorio</th>

                </tr>
            </thead>
            <tbody>
                <?php $cont=1;?>
            	@foreach ($papa as $key => $atpapa)
					<tr class="tabla--datos-fila">
						<th scope="row">{{$cont}}</th>
						<td>{{$atpapa->muestra}}</td>
						<td>{{$atpapa->fecha_periodo}}</td>
						<td>{{$atpapa->hijos}}	</td>
						<td>{{$atpapa->fecha_entrega}}	</td>
                        <td>{{$atpapa->fecha_recepcion}}    </td>
                        <td>{{$atpapa->fecha_envio}}   </td>
                        <td>{{$atpapa->estado}}    </td>
                        <td>{{$atpapa->laboratorio}}    </td>
					</tr>
                    <?php $cont++;?>
				@endforeach
            </tbody>
        </table>
        <br>
	{!!$papa->render()!!}
    </div>
    
</center>
@endsection