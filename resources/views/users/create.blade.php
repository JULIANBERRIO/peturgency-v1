@extends('adminlte::page')


@section('title', 'Agregar Usuarios')
@section('content_header')
    <h1>Agregar Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form class="col-sm-4" action="{{ route('user-save') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre del Usuario</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nombre de Usuario"
                           required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com"
                           required>
                </div>

                <div class="form-group">
                    <label for="phone">Celular</label>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Celular">
                </div>

                <div class="form-group">
                    <label for="gender">Genero</label>
                    <select name="gender" id="gender" class="form-control">
                        <option>-</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="role">Perfil</label>
                    @foreach($roles as $rol)
                        <div>
                            <label for="rol{{$rol->id}}">
                                <input id="rol{{$rol->id}}" type="checkbox" name="roles" value="{{$rol->id}}">
                                {{$rol->name}}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="status">Estado</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" minlength="6" class="form-control" placeholder="******">
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
