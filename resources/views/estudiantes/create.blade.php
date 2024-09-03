@extends('adminlte::page')

@section('title', 'Registrar Nuevo Estudiante')

@section('content_header')
    <h1>Registrar Nuevo Estudiante</h1>
@stop

@section('content')
    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}" step="0.01" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}"required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" value="{{ old('direccion') }}"required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" id="ciudad" name="ciudad" class="form-control" value="{{ old('ciudad') }}"required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input type="text" id="pais" name="pais" class="form-control" value="{{ old('pais') }}"required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pais">Genero</label>
                    <select id="genero" name="genero" class="form-control" value="{{ old('genero') }}" required>
                        <option value="male">Masculino</option>
                        <option value="female">Femenino</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" class="submiBtn">Guardar</button>
        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop

