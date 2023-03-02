@extends('cursos.base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Cursos</h1>
        <div>
            <a href="{{ route('cursos.create')}}" class="btn btn-primary mb-3">Adicionar Curso</a>
        </div>
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome do Curso</td>
                    <td>Valor do Curso</td>
                    <td>Atualizado em</td>
                    <td colspan=2>Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach($cursos as $curso)
                <tr>
                    <td>{{$curso->id}}</td>
                    <td>{{$curso->nome}} </td>
                    <td>{{$curso->valor}}</td>
                    <td>{{$curso->updated_at}}</td>
                    <td>
                        <a href="{{ route('cursos.edit',$curso->id)}}" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('cursos.destroy', $curso->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @endsection