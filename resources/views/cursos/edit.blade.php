@extends('cursos.base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Alterar Curso</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('cursos.update', $curso->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">

                <label for="nome_curso">Nome do Curso:*</label>
                <input type="text" class="form-control" name="nome_curso" value="{{ $curso->nome }}" />
            </div>

            <div class="form-group">
                <label for="valor">Valor do Curso:*</label>
                <input type="text" class="form-control" name="valor" value="{{ $curso->valor }}" />
            </div>

            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>
</div>
@endsection