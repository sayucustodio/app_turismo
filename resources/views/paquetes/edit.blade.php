@extends('layouts.admin')

@section('contenido')
<div class="container">
<form action="{{ route('paquetes.update', $paquetes->id()) }}" method="POST">

@csrf
        @method('PUT')
    <legend>EDITAR PAQUETE</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nombre Lugar</label>
      <input name="nombre"class="form-control" type="text" value="{{ $paquetes['nombrePlatillo'] }}" aria-label="default input example">
    </div>
    
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Descripcion</label>
      <input name="descripcion" class="form-control" type="text" value="{{$paquetes['descripcion'] }}" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Foto</label>
      <input name="foto" class="form-control" type="text" value="{{ $paquetes['foto'] }}" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Categoría</label>
      <input name="categoria" class="form-control" type="text" value="{{ $paquetes['categoria'] }}"  aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Precio</label>
      <input name="precio" class="form-control" type="text" value="{{ $paquetes['precio'] }}"  aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Puntuación</label>
      <input name="puntuacion" class="form-control" type="text" value="{{ $paquetes['puntuacion'] }}"  aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Stock</label>
      <input name="stock" class="form-control" type="text" value="{{ $paquetes['stock'] }}"  aria-label="default input example">
    </div>
   
   
    
    
    <div class="mb-3">
                            <a href="/usuarios" class="btn btn-secondary" tabindex="4">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
  
</form>

</div>

@endsection