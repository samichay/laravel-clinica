@extends('layouts/admin')

@section('body')
<div class="targetas">
    <a href="/usuario" class="targeta-uno">
        <h2>{{$usuarios}}</h2>
        <p>Usuarios</p>
    </a>
    <a href="/atencion" class="targeta-dos">
        <h2>{{$atenciones}}</h2>
        <p>Atenciones</p>
    </a>
    <a href="/paciente" class="targeta-uno targeta-dos">
        <h2>{{$pacientes}}</h2>
        <p>Pacientes</p>
    </a>
    <a href="/insumo" class="targeta-uno targeta-dos">
        <h2>{{$insumos}}</h2>
        <p>Insumos</p>
    </a>
</div>
@endsection