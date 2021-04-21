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
                    <a href="{{ route('pet-create') }}" class="btn btn-success">
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
                        <th>Genero</th>

                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Pets as $pet)
                        <tr>
                            <td> {{ $pet->id }}</td>
                            <td> {{ $pet->name }}</td>
                            <td> {{ $pet->age }}</td>
                            <td> {{ $pet->race }}</td>
                            <td> {{ $pet->description}}</td>
                            <td> {{ $pet->gender}}</td>

                            <td class="text-center">
                                <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                   onclick="deletePet('{{$pet->id}}')">
                                    <i class="fa fa-trash"></i>
                                    <form action="{{ route('pet-delete', $pet)}}" id="delete-pet-{{$pet->id}}"
                                          method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </a>
                                <a href="{{ route('pet-update', $pet) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <script type="text/javascript">
                function deletePet(id) {
                    if (confirm('¿Realmente desea eliminar este registro?')) {
                        document.getElementById('delete-pet-' + id).submit()
                    }
                }
            </script>

        </div>
    </div>
@endsection
