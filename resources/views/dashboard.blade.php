@extends('adminlte::page')


@section('title', 'Panel de Control')
@section('content_header')
    <h1>Panel de Control</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Bienvenido {{Auth::user()->name }} {{Auth::user()->role }} </h5>
        </div>
    </div>
@endsection
