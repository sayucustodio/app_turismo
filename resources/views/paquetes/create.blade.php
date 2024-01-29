@extends('layouts.admin')

@section('contenido')
<div class="container">
<form action="/paquetes" method="POST">
@csrf
    <legend>REGISTRO PAQUETE</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nombre Lugar</label>
      <input name="nombre"class="form-control" type="text" placeholder="Ingrese nombre de paquete" aria-label="default input example">
    </div>
    
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Descripcion</label>
      <input name="descripcion" class="form-control" type="text" placeholder="Ingrese descripcion de paquets" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Foto</label>
      <input name="foto" class="form-control" type="text" placeholder="Ingrese foto" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Categoría</label>
      <input name="categoria" class="form-control" type="text" placeholder="Ingrese categoria" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Precio</label>
      <input name="precio" class="form-control" type="text" placeholder="Ingrese precio" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Puntuación</label>
      <input name="puntuacion" class="form-control" type="text" placeholder="Ingrese puntuacion" aria-label="default input example">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Stock</label>
      <input name="stock" class="form-control" type="text" placeholder="Ingrese stock" aria-label="default input example">
    </div>
   
    
    
    <div class="mb-3">
                            <a href="/paquetes" class="btn btn-secondary" tabindex="4">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
  
</form>

</div>

@endsection