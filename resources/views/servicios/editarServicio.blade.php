@extends('layouts.plantillaBase');

@section('contenido')

<div class="content py-3">
    <div class="card">
        <div class="card-header">
            <h4>Editar servicio</h4>
        </div>
        <div class="card-body">
            <form action="/servicios/{{$servicio->id}}" method="POST" enctype="multipart/from-data">
                @csrf
                @method('PUT')
              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" value="{{$servicio->nombre}}">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Imagen</label>
                <input id="imagen" name="imagen" type="file" class="form-control" accept="image/*">
              </div>
              <a href="/programa" class="btn btn-secondary">Cancelar</a>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection