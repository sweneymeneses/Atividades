@extends('layout')

@section('conteudo')

    <h3 class="mb-4">Lista de Equipamentos</h3>
    <table class="table table-bordered">
        <thead class="table-danger">
            <th>#</th>
            <th>Nome</th>
        </thead>
        <tbody>
            @foreach ($equipmentList as $equipment)
                <tr>
                    <td>{{ $equipment->id }}</td>
                    <td>{{ $equipment->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3 class="mb-4">Manutenções</h3>
    <table class="table table-bordered">
        <thead class="table-danger">
            <tr>
                <th>#</th>
                <th>Equipamento</th>
                <th>Usuário</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->equipment_name }}</td>
                    <td>{{ $record->user_name }}</td>
                    <td>{{ $recordTypes[$record->type] }}</td>
                    <td>{{ $record->description }}</td>
                    <td>{{ $record->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
