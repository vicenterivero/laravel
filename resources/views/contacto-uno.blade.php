
@extends('plantilla')
@section('titulo')
Contacto
@endsection
@section('contenido')
        <div class="contenido1">
           <!-- Token para transacciones seguras -->

          <form class="formulario" action="{{url('contacto')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" name="nombre" @error('nombre') is-valid @enderror class="form-control" id="inputEmail3" value="{{old('nombre')}}">
                  @error('nombre')
                  <h5>{{$message}}</h5>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3"  class="col-sm-2 col-form-label">Apellidos</label>
                <div class="col-sm-10">
                  <input type="text" name="apellidos" @error('apellidos') is-valid @enderror class="form-control" id="inputEmail3" value="{{old('apellidos')}}">
                  @error('apellidos')
                  <h5>{{$message}}</h5>
                  @enderror
                </div>
              </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Correo</label>
              <div class="col-sm-10">
                <input type="email"  name="email" @error('email')

                @enderror class="form-control" id="inputEmail3" value="{{old('email')}}">
                @error('email')
                <h5>{{$message}}</h5>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Asunto</label>
              <div class="col-sm-10">
                <input type="text" name="asunto" @error('asunto') is-valid @enderror class="form-control" id="inputPassword3" value="{{old('asunto')}}">
                @error('asunto')
                <h5>{{$message}}</h5>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Archivo</label>
                <div class="col-sm-10">
                  <input type="file" name="foto" @error('foto')@enderror class="form-control" id="inputPassword3" value="{{old('foto')}}">
                  @error('foto')
                  <h5>{{$message}}</h5>
                  @enderror
                </div>
              </div>
            <div class="row mb-3">
              <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Aceptar terminos y condiciones
                  </label>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>

      </div>
@endsection
