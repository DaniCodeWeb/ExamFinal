@extends('adminlte::page')

@section('title', 'Crear Nuevo Curso')

@section('content_header')
    <h1>Registrar Nuevo Curso</h1>
@stop

@section('content')
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="titulo">Nombre del Curso</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo') }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="descripcion">Descripcion del Curso</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{ old('descripcion') }}" step="0.01" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" class="submiBtn">Guardar</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop

