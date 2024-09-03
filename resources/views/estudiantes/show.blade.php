@extends('adminlte::page')

@section('title', 'Detalles del Estudiante - ' . $estudiante->nombre)

@section('content_header')
    <h1>Detalles del Estudiante</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $estudiante->nombre }}</p>
            <p><strong>Email:</strong> {{ $estudiante->email }}</p>
            <p><strong>Telefono:</strong> {{ $estudiante->telefono }}</p>
            <p><strong>Direccion:</strong> {{ $estudiante->direccion }}</p>
            <p><strong>Ciudad:</strong> {{ $estudiante->ciudad }}</p>
            <p><strong>Pais:</strong> {{ $estudiante->pais }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $estudiante->fecha_nacimiento }}</p>
            <p><strong>Genero:</strong> {{ $estudiante->genero === 'male' ? 'Masculino' : 'Femenino' }}</p>
        </div>
    </div>
    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Volver</a>
@stop
