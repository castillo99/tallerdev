<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Theme style -->
    <link rel="stylesheet" href="{{public_path('dist/css/adminlte.min.css')}}">
    <title>Reporte</title>
</head>

<body>
    <div class="container1">
        <div class="row">
            <div class="col">
                <img src="{{public_path('img/imag.jpg')}}" alt="" width='60px'>
            </div>
            <div class="col-md-15 col-xs-15">
                <h4 class="text-center">Jardin Infantil Santa Fe</h4>
            </div>
        </div>
        <div class="row">
            <h3 class="text-center">Reporte de Estudiantes</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Documento Identidad</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Genero</th>
                        <th>Fecha_nacimiento</th>
                        <th>Edad</th>
                        <th>Nombre_Padre</th>
                        <th>Nombre_Madre</th>
                        <th>Telefono</th>
                        <th>Correo Electrónico</th>
                        
                    </thead>
                    <tbody>
                        @foreach($personas as $per)
                        <tr>
                            <td>{{ $per->id }}</td>
                            <td>{{ $per->documento_identidad}}</td>
                            <td>{{ $per->nombre}}</td>
                            <td>{{ $per->apellido}}</td>
                            <td>{{ $per->genero}}</td>
                            <td>{{ $per->fecha_nacimiento}}</td>
                            <td>{{ $per->edad}}</td>
                            <td>{{ $per->nombre_padre}}</td>
                            <td>{{ $per->nombre_madre}}</td>
                            <td>{{ $per->telefono }}</td>
                            <td>{{ $per->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>