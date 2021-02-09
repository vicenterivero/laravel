@extends('plantilla')
@section('titulo')
Registro
@endsection
@section('h1')
@endsection
@section('contenido')

<form class="registro" action="{{url('prueba')}}" method="POST">
    @csrf
    <input class="col-sm-2 col-form-label" type="text" name="nombre" placeholder="Ingresa tu nombre"> <br>
    <input class="col-sm-2 col-form-label" type="text" name="apellidos" placeholder="Ingresa tu apellido"><br>
    <input class="col-sm-2 col-form-label" type="email" name="correo" placeholder="Ingresa tu correo"><br>
    <input class="col-sm-2 col-form-label" type="number" name="telefono" placeholder="Ingresa tu numero"><br>
    <input class="col-sm-2 col-form-label" type="password" name="contraseña" placeholder="Ingresa tu contraseña"><br>
    <button class="btn btn-primary"type="submit">Enviar</button>

</form>
@endsection
