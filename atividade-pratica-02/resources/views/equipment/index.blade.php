@extends('layout')

@section('conteudo')

<div class="container">
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        <br />
    @endif

    <div class="d-flex justify-content-between align-items-center align-coletas-center mb-5 top-bar">
        <h1 class="text-center">Equipamentos</h1>
        <div>
            <a href="/equipment/create" class="btn btn-primary">Cadastrar</a>
        </div>
    </div>

    <table class="table table-bordered table-hover table-striped" style="text-align: center;">
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($equipment as $equipment)
                <tr>
                    <td>{{ $equipment->id }}</td>
                    <td>{{ $equipment->name }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-1">
                            <a href="/equipment/edit/{{ $equipment->id }}" class="btn btn-primary btn-sm">Editar</a>

                            <form action="/equipment/delete/{{$equipment->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
