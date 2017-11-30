@extends('layouts/admin')
@section('body')
<h1>Esta es la ventana de insumos</h1>
 <center>
    <div class="tabla">
        <table class="tabla--datos">
            <thead class="titulo">
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Stock</th>
                    <th>Descripcion</th>
                    <th>Editar</th>

                </tr>
            </thead>
            <tbody>
            	@foreach ($insumos as $key => $insumo)
					<tr class="tabla--datos-fila">
						<th scope="row">{{$insumo->id_insumos}}</th>
						<td>{{$insumo->nombre}}</td>
						<td>{{$insumo->stock}}</td>
						<td>{{$insumo->descripcion}}	</td>
						<td>{!!link_to_route('insumo.edit', $title = 'Edit', $parameters = $insumo, $attributes = ['class'=>'btn-primario'])!!}
                        </td>
					</tr>
				@endforeach
            </tbody>
        </table>
        <br>
	{!!$insumos->render()!!}
    </div>
</center>
@endsection