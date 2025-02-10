@extends('layouts.plantillaBase');

@section('contenido')
<div class="content py-3">
    <div class="card">
        <div class="card-header">
            <h4>Crear servicio</h4>
        </div>
        <div class="card-body">
            <form action="/servicios" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="col-7 mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Imagen</label>
                <input id="imagen" name="imagen" type="file" class="form-control" tabindex="3" accept="image/*">
              </div>
            <a href="/servicios" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection