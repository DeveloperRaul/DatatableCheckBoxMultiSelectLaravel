<table id="mytableKuali" class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
        <th class="text-center">Clave</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Fecha</th>
    </tr>
  </thead>
  <tbody>
  <!--Se Recorre Toda La Lista De Productos Que El Controlador Ha Enviado-->
    @foreach($productos as $producto)
        <tr>
            <td class="text-center">{{ $producto->id }}</td>
            <td class="text-center">{{ $producto->nombre }}</td>
            <td class="text-center">{{ $producto->marca }}</td>
            <td class="text-center">{{ $producto->created_at }}</td>
        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">Clave</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Marca</th>
        <th class="text-center">Fecha</th>
    </tr>
  </tfoot>
</table>