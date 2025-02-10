@extends('layouts.plantillaBase');

@section('contenido')

<div class="container-fluid py-5">
    <div class="row">
        <div class="col-12">
            <div class="card ms-3 mb-4" style="width: 98%">
                <div class="card-header pb-0">
                    <h6>El usuario {{$user->nombre}} esta suscrito a los siguientes servicios.</h6>
                </div>
                    
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="usuarios">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Servicios</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Logo</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->servicios as $servicio  )
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$servicio->nombre}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <img src="/imagen/{{$servicio->imagen}}" width="50px">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-icon btn-primary btn-sm mb-2" href="/users" role="button">Regresar</a>
        </div>
    </div>
</div>

@endsection