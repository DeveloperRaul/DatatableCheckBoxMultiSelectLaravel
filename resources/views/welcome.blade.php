<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>  
        <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap.min.css')}}"/> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.checkboxes.css')}}"/> 
    </head>
    <body>
    <div class="container" style="margin:15px auto">
    <h3>Este es un Ejemplo de como Cargar datos en un DataTable de jQuery, con la funcionalidad de poder seleccionar más de una fila y obteniendo su valor, ocupando Laravel 5.2.</h3>
    <br/>
                @yield('content')
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/dataTables.checkboxes.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            var mytable = $("#mytableKuali").DataTable({
               
                columnDefs: [{
                    targets: 0,
                    checkboxes: {
                        seletRow: true
                    }
                }],
                select: {
                    style: 'multi'
                },
                order: [
                    [1, 'asc']
                ]
            })
            $("#myform").on('submit', function(e) {
                var form = this
                var rowsel = mytable.column(0).checkboxes.selected();
                $.each(rowsel, function(index, rowId) {
                    $(form).append(
                        $('<input>').attr('type', 'hidden').attr('name', 'id[]').val(rowId)
                    )
                })
                $("#view-rows").text(rowsel.join(","))
                $("#view-form").text($(form).serialize())
                $('input[name="id\[\]"]', form).remove()
                e.preventDefault()
            })
        })
    </script>
    </body>
</html>
