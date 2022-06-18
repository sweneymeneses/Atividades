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
        <h1 class="text-center">Manutenções</h1>
        <div>
            <a href="/records/create" class="btn btn-primary">Cadastrar</a>
        </div>
    </div>

    <table class="table table-bordered table-hover table-striped" style="text-align: center;">
        <thead>
            <th>#</th>
            <th>Equipamento</th>
            <th>Usuário</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Tipo</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->equipment->name }}</td>
                    <td>{{ $record->user->name }}</td>
                    <td>{{ $recordTypes[$record->type] }}</td>
                    <td>{{ $record->description }}</td>
                    <td>{{ $record->date }}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-1">
                            <a href="/records/edit/{{ $record->id }}" class="btn btn-primary btn-sm">Editar</a>

                            <form action="/records/delete/{{$record->id}}" method="POST">
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
