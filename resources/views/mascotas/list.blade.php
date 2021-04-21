@extends('adminlte::page')


@section('title', 'Mascota')
@section('content_header')
    <h1>Mascotas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">


            <div class="row">
                <div class="col text-right">
                    <a href="{{ route('mascota-create') }}" class="btn btn-success">
                        <i class="fa fa-save"></i>
                        Agregar Mascota
                    </a>
                </div>
            </div>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th># ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Raza</th>
                        <th>Descripcion</th>

                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Mascotas as $mascota)
                        <tr>
                            <td> {{ $mascota->id }}</td>
                            <td> {{ $mascota->name }}</td>
                            <td> {{ $mascota->edad }}</td>
                            <td> {{ $mascota->raza }}</td>
                            <td> {{ $mascota->descripcion}}</td>
                            
                            <td class="text-center">
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                   onclick="deleteMascota('{{$mascota->id}}')">
                                    <i class="fa fa-trash"></i>
                                    <form action="{{ route('mascota-delete', $mascota)}}" id="delete-mascota-{{$mascota->id}}"
                                          method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </a>
                                <a href="{{ route('mascota-update', $mascota) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script type="text/javascript">
                function deleteMascota(id) {
                    if (confirm('¿Realmente desea eliminar este registro?')) {
                        document.getElementById('delete-mascota-' + id).submit()
                    }
                }
            </script>

        </div>
    </div>
@endsection
