@extends('layouts.plantillaBase');

@section('contenido')

<div class="content py-3">
    <div class="card">
        <div class="card-header">
            <h4>Editar usuario</h4>
        </div>
        <div class="card-body">
            <form action="/users/{{$user->id}}" method="POST">
                @csrf
                @method('PUT')
              <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Correo electtrónico</label>
                <input id="email" name="email" type="text" class="form-control" value="{{$user->email}}">
              </div>
              <a href="/users" class="btn btn-secondary">Cancelar</a>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection