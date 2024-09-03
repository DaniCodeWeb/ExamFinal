@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <h1>Cursos</h1>
@stop

@section('content')
    <a href="{{ route('cursos.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo </a>
    <table id="cursos" class="table table-bordered shadow-lg mt-12">
        <thead class="text-white" style="background-color: #515E78;">
            <tr>
                <td width="15px">Nº</td>
                <th class="text-center">Nombre del Curso</th>
                <th class="text-center">Descripcion del Curso</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td class="text-center">{{ $curso->id }}</td>
                    <td class="text-center">{{ $curso->titulo }}</td>
                    <td class="text-center">{{ $curso->descripcion }}</td>
                    <td class="text-center">
                    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i> </a>
                        <a href="{{ route('cursos.show', $curso) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display:inline;">
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
