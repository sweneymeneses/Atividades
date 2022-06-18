@extends('layout')

@section('conteudo')

<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <h1 class="text-center">Cadastrar Equipamento</h1>
    </div>

    <div class="centered">
        <form action="/equipment/{{ $equipment->id }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $equipment->name }}">
            </div>

            <button type="submit" class="btn btn-primary d-block w-100">Salvar</button>
        </form>
    </div>
</div>

@endsection
