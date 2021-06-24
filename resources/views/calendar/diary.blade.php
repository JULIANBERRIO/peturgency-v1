@extends('adminlte::page')


@section('title', 'Usuarios')
@section('content_header')
    <h1>Calendario</h1>
@stop
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css">
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/locales-all.js"></script>
    <script src="{{'js/diary.js'}}" defer></script>
@endsection
@section('content')

    <div class="Container">
        <div id="diary">
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch
    </button>

    <!-- Modal -->
    <div class="modal fade" id="event" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="">

                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="id">ID:</label>
                            <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="Escribe el título del evento">
                            <small id="" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el título del evento">
                            <small id="" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="form-group">
                            <label for="description">Descrición</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="start">start</label>
                            <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="form-group">
                            <label for="end">end</label>
                            <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success" id="event-save"><i class="fa fa-save"></i> Guardar</button>
                    <button type="button" class="btn btn-primary" id="event-update"><i class="fa fa-trash"></i> Editar</button>
                    <button type="button" class="btn btn-danger" id="event-delate"><i class="fa fa-pen"></i> Eliminar</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>



                </div>
            </div>
        </div>
    </div>


@endsection
