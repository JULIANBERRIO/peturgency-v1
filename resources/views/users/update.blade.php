@extends('adminlte::page')


@section('title', 'Actualizar Usuarios')
@section('content_header')
    <h1>Actualizar Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            <form class="col-sm-4" action="{{ route('user-save', $user) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre del Usuario</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nombre de Usuario"
                           required value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com"
                           required value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="phone">Celular</label>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Celular"
                           value="{{ $user->phone }}">
                </div>

                <div class="form-group">
                    <label for="gender">Genero</label>
                    @php(  $set = $user->gender )
                    <select name="gender" id="gender" class="form-control">
                        <option>-</option>
                        <option value="Hombre" {{ ($set === 'Hombre') ? 'selected' : '' }}>Hombre</option>
                        <option value="Mujer" {{ ($set === 'Mujer') ? 'selected' : '' }}>Mujer</option>
                        <option value="Otro" {{ ($set === 'Otro') ? 'selected' : '' }}>Otro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="role">Perfil</label>
                    @php(  $set = $user->role )
                    <select name="role" id="role" class="form-control" required>
                        <option value="Admin" {{ ($set === 'Admin') ? 'selected' : '' }}>Administrador</option>
                        <option value="Cliente" {{ ($set === 'Cliente') ? 'selected' : '' }}>Cliente</option>
                        <option value="Veterinaria" {{ ($set === 'Veterinaria') ? 'selected' : '' }}>
                            Veterinaria
                        </option>
                        <option value="Medico" {{ ($set === 'Medico') ? 'selected' : '' }}>Medico</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status">Estado</label>
                    @php(  $set = $user->status )
                    <select name="status" id="status" class="form-control" required>
                        <option value="1" {{ ($set == '1') ? 'selected' : '' }}>Activo</option>
                        <option value="0" {{ ($set == '0') ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" minlength="6" class="form-control"
                           placeholder="******">
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
