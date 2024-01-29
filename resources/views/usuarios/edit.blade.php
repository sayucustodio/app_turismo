@extends('layouts.admin')

@section('contenido')
<div class="container">
<form action="{{ route('usuarios.update', $usuarios->id()) }}" method="POST">

@csrf
        @method('PUT')
    <legend>REGISTRO USUARIO</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nombre</label>
      <input name="nombre"class="form-control" value="{{ $usuarios['nombreUsuario'] }}" type="text" placeholder="Ingrese nombre" aria-label="default input example">
    </div>
    
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Correo electrónico</label>
      <input name="correo" class="form-control" type="text" value="{{ $usuarios->data()['email'] }}" placeholder="Ingrese correo" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Direccion</label>
      <input name="direccion" class="form-control" type="text" placeholder="Ingrese direccion"value="{{ $usuarios->data()['direccion'] }}" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Contraseña</label>
      <input name="contraseña" class="form-control" type="password" placeholder="Ingrese contraseña" value="{{ $usuarios->data()['password'] }}" aria-label="default input example">
    </div>
   
    
    
    <div class="mb-3">
                            <a href="/usuarios" class="btn btn-secondary" tabindex="4">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
  
</form>

</div>

@endsection