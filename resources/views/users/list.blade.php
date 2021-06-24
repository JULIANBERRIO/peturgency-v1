@extends('adminlte::page')


@section('title', 'Usuarios')
@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">


            <div class="row">
                <div class="col text-right">
                    <a href="{{ route('user-create') }}" class="btn btn-success">
                        <i class="fa fa-save"></i>
                        Agregar Usuario
                    </a>
                </div>
            </div>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th># ID</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Perfil</th>
                        <th>Genero</th>
                        <th>Estado</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Users as $user)
                        <tr>
                            <td> {{ $user->id }}</td>
                            <td> {{ $user->name }}</td>
                            <td> {{ $user->email }}</td>
                            <td> {{ $user->nombreRol }}</td>
                            <td> {{$user->gender}}</td>
                            <td>
                                @if ($user->status)
                                    <span class="badge badge-success">Activo</span>
                                @else
                                    <span class="badge badge-danger">Inactivo</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)"  id="delete{{$user->id}}" class="btn btn-sm btn-danger"
                                   onclick="deleteUser('{{$user->id}}')">
                                    <i class="fa fa-trash"></i>
                                    <form action="{{ route('user-delete', $user)}}" id="delete-user-{{$user->id}}"
                                          method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </a>
                                <a href="{{ route('user-update', $user) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script type="text/javascript">
                function deleteUser(id) {
                    if (confirm('¿Realmente desea eliminar este registro?')) {
                        document.getElementById('delete-user-' + id).submit()
                    }
                }
            </script>

        </div>
    </div>
@endsection
