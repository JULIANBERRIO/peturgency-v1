@extends('adminlte::page')


@section('title', 'Agregar Mascotas')
@section('content_header')
    <h1>Agregar Mascotas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form class="col-sm-4" action="{{ route('pet-save') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre de la Mascota</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nombre mascota"
                           required>
                </div>

                <div class="form-group">
                    <label for="age">Edad</label>
                    <input type="number" id="age" name="age" class="form-control" placeholder="12"
                           required>
                </div>

                <div class="form-group">
                    <label for="race">Raza</label>
                    <input type="text" id="race" name="race" class="form-control" placeholder="Raza">
                </div>
                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" id="description" name="description" class="form-control" placeholder="Hola">
                </div>

                <div class="form-group">
                    <label for="gender">Genero</label>
                    <select name="gender" id="gender" class="form-control">
                        <option>-</option>
                        <option value="Hombre">Macho</option>
                        <option value="Mujer">Hembra</option>
                        
                    </select>
                </div>

                <div class="row">
                    <div class="col">
                        <button class="btn btn-success" type="submit">
                            <i class="fa fa-save"></i>
                            Guardar
                        </button>
                    </div>
                </div>


            </form>

        </div>
    </div>
@endsection
