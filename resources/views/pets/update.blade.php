@extends('adminlte::page')


@section('title', 'Actualizar Mascotas')
@section('content_header')
    <h1>Actualizar Mascotas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form class="col-sm-4" action="{{ route('pet-save', $pet) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre de la mascota</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nombre de Usuario"
                           required value="{{ $pet->name }}">
                </div>

                <div class="form-group">
                    <label for="age">Edad</label>
                    <input type="number" id="age" name="age" class="form-control" placeholder="email@example.com"
                           required value="{{ $pet->age }}">
                </div>

                <div class="form-group">
                    <label for="race">Raza</label>
                    <input type="text" id="race" name="race" class="form-control" placeholder="Bulldog"
                           value="{{ $pet->race }}">
                </div>

                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <input type="text" id="description" name="description" class="form-control" placeholder="Hola"
                           value="{{ $pet->description }}">
                </div>

                <div class="form-group">
                    <label for="gender">Genero</label>
                    @php(  $set = $pet->gender )
                    <select name="gender" id="gender" class="form-control">
                        <option>-</option>
                        <option value="Hombre" {{ ($set === 'Macho') ? 'selected' : '' }}>Macho</option>
                        <option value="Mujer" {{ ($set === 'Hembra') ? 'selected' : '' }}>Hembra</option>
                      
                    </select>
                </div>

                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-save"></i>
                            Actualizar
                        </button>
                    </div>
                </div>


            </form>

        </div>
    </div>
@endsection
