@extends('layouts.plantillaBase');

@section('contenido')

<div class="container-fluid py-4">
<div class="row">
    <div class="col-12">
        <div class="card ms-3 mb-4" style="width: 98%">
            <div class="card-header pb-0">
                <h6>Administración de usuarios</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0" id="usuarios">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Usuario</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">

                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-2 align-middle text-end">
                                    <form action="{{route('users.destroy', $user)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <a class="btn btn-icon btn-success btn-sm" href="{{route('users.show', $user)}}" role="button"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-icon btn-primary btn-sm" href="{{route('users.edit', $user)}}" role="button"><i class="fa fa-edit"></i></a>
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