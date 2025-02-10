@extends('layouts.plantillaBase');

@section('contenido')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card ms-3 mb-4" style="width: 98%">
                <div class="card-header pb-0">
                    <h6>Administración de servicios</h6>
                    <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">

                        <a class="btn btn-icon btn-primary btn-sm mb-2" href="{{route('servicios.create')}}" role="button">Crear servicio</a>

                      </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="servicios">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Servicio</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Logo</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicios as $servicio )
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$servicio->id}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$servicio->nombre}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="/imagen/{{$servicio->imagen}}" width="50px">
                                    </td>
                                    <td class="align-middle text-end">
                                        <form action="{{route('servicios.destroy', $servicio)}}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                        <a class="btn btn-icon btn-success btn-sm" href="{{route('servicios.show', $servicio)}}" role="button"><i class="fa fa-eye"></i></a>    
                                        <a class="btn btn-icon btn-primary btn-sm" href="{{route('servicios.edit', $servicio)}}" role="button"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-icon btn-danger btn-sm" href="" role="button"><i class="fa fa-trash"></i></button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection