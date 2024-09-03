@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="estudiantes" class="table table-bordered shadow-lg mt-12">
        <thead class="text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th class="text-center">Nombre</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Direccion</th>
                <th class="text-center">Ciudad</th>
                <th class="text-center">Pais</th>
                <th class="text-center">Fecha de Nacimiento</th>
                <th class="text-center">Genero</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td class="text-center">{{ $estudiante->id }}</td>
                    <td class="text-center">{{ $estudiante->nombre }}</td>
                    <td class="text-center">{{ $estudiante->email }}</td>
                    <td class="text-center">{{ $estudiante->telefono }}</td>
                    <td class="text-center">{{ $estudiante->direccion }}</td>
                    <td class="text-center">{{ $estudiante->ciudad }}</td>
                    <td class="text-center">{{ $estudiante->pais }}</td>
                    <td class="text-center">{{ $estudiante->fecha_nacimiento }}</td>
                    <td class="text-center">{{ ucfirst ($estudiante->gender== 'male' ? 'Masculino' : 'Femenino') }}</td>
                    <td class="text-center">
                    <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('estudiantes.show', $estudiante) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
