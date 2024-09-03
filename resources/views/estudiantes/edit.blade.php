@extends('adminlte::page')

@section('title', 'Editar Estudiante - ' . $estudiante->nombre)

@section('content_header')
    <h1>Editar Estudiante</h1>
@stop

@section('content')
    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $estudiante->nombre }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{ $estudiante->email }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" value="{{ $estudiante->telefono }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" value="{{ $estudiante->direccion }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" id="ciudad" name="ciudad" class="form-control" value="{{ $estudiante->ciudad }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input type="text" id="pais" name="pais" class="form-control" value="{{ $estudiante->pais }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{ $estudiante->fecha_nacimiento }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <select id="genero" name="genero" class="form-control" required>
                        <option value="male" {{ $estudiante->genero === 'male' ? 'selected' : '' }}>Masculino</option>
                        <option value="female" {{ $estudiante->genero === 'female' ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop
