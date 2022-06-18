@extends('layout')

@section('conteudo')

    <h3 class="mb-4">Lista de Usuários (A-Z)</h3>
    <table class="table table-bordered">
        <thead class="table-danger">
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
