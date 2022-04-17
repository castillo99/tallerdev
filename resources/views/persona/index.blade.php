@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-10">
        <a href="{{url('persona/create')}}" class="pull-right">
            <button class="btn btn-success">Crear Persona</button> </a>
        <a href="{{url('imprimirPersonas')}}" class="pull-right">
            <button class="btn btn-success">Imprimir Pdf</button></a>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-xs-10">
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
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($persona as $per)
                    <tr>
                        <td>{{ $per->id }}</td>
                        <td>{{ $per->documento_identidad}}</td>
                        <td>{{ $per->nombre }}</td>
                        <td>{{ $per->apellido}}</td>
                        <td>{{ $per->genero}}</td>
                        <td>{{ $per->fecha_nacimiento}}</td>
                        <td>{{ $per->edad}}</td>
                        <td>{{ $per->nombre_padre}}</td>
                        <td>{{ $per->nombre_madre}}</td>
                        <td>{{ $per->telefono }}</td>
                        <td>{{ $per->email }}</td>
                        <td>
                            <a href="{{URL::action('App\http\Controllers\PersonaController@edit',$per->id)}}"><button
                                    class="btn btn-primary">Actualizar</button></a>
                            <a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"> <button
                                    class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                    @include('persona.modal')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection