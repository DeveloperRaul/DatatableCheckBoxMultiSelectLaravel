<!--Se Manda A Llamar Todo El Esqueleto Principal De La Página-->
@extends('welcome')
<!--Se Pone La Sección De Se Colocará La Vista Parcial-->
@section('content')     
    <form id="myform" method="post">
            <p><b>Filas Seleccionadas</b></p>
            <pre id="view-rows"></pre>
            <p><b>Datos del Formulario en el Server</b></p>
            <pre id="view-form"></pre>
            <p><button class="btn btn-danger">Ver Seleccionados</button><br/></p>
            <!--Se Incluye La Vista Parcial De La Tabla-->
            @include('productos.partials.table')
    </form>
@endsection