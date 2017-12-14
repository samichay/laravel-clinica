@extends('layouts/admin')

@section('body')

{{-- <div class="targetas">
    <a href="/usuario" class="targeta-uno">
        <h2>{{$usuarios}}</h2>
        <p>Usuarios</p>
    </a>
    <a href="/atencion" class="targeta-dos">
        <h2>{{$atenciones}}</h2>
        <p>Atenciones</p>
    </a>
    <a href="/paciente" class="targeta-uno targeta-tres">
        <h2>{{$pacientes}}</h2>
        <p>Pacientes</p>
    </a>
    <a href="/insumo" class="targeta-uno targeta-cuatro">
        <h2>{{$insumos}}</h2>
        <p>Insumos</p>
    </a>
</div>
 --}}
 <h1 style="margin: 0;font-size: 24px;">  <i class="icono izq fa fa-home" aria-hidden="true"></i> Pagina Principal </h1>
 <br>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
                <a href="/usuario" style="color: white;">
              <h3>{{$usuarios}}</h3>
              <p>Usuarios</p>
                </a>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/usuario#modalregistrousuario" class="small-box-footer">Nuevo Usuario <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
               <a href="/atencion" style="color: white;"> 
              <h3>{{$atenciones}}</h3>
              <p>Atenciones</p>
                </a>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/atencion#modalregistroatencion" class="small-box-footer">Nueva Atencion <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <a href="/paciente" style="color: white;">
              <h3>{{$pacientes}}</h3>
              <p>Pacientes</p>
              </a>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="/paciente#modalregistropaciente" class="small-box-footer">Nuevo Paciente <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-red">
            <div class="inner">
              <a href="/insumo" style="color: white;">
              <h3>{{$insumos}}</h3>
              <p>Insumos</p>
              </a>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            
            <a href="/insumo#modalregistroinsumo" class="small-box-footer">Nuevo insumo <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
<br>
<h1 style="margin: 4;font-size: 24px;"> <br>Ganancias por dia  </h1>

    <div id="curve_chart" style="width: 1000px; height: 600px; float: left;"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['fecha Atencion', 'Total',],
            @foreach ($user as $usuario)
            [{{$usuario->fecha_atencion}},{{$usuario->precio2}}],

            @endforeach
        ]);

        var options = {
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
@endsection