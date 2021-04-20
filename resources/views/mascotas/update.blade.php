@extends('adminlte::page')


@section('title', 'Actualizar Mascotas')
@section('content_header')
    <h1>Actualizar Mascotas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form class="col-sm-4" action="{{ route('mascota-save', $mascota) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre de la mascota</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nombre de Usuario"
                           required value="{{ $mascota->name }}">
                </div>

                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" class="form-control" placeholder="email@example.com"
                           required value="{{ $mascota->edad }}">
                </div>

                <div class="form-group">
                    <label for="raza">Raza</label>
                    <input type="text" id="raza" name="raza" class="form-control" placeholder="Celular"
                           value="{{ $mascota->raza }}">
                </div>

                <div class="form-group">
                    <label for="raza">Descripcion</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Hola"
                           value="{{ $mascota->descripcion }}">
                </div>

                <div class="form-group">
                    <label for="gender">Genero</label>
                    @php(  $set = $mascota->gender )
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
