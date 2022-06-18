@extends('layout')

@section('conteudo')

    <h3 class="mb-4">Relatório de Manutenções por Equipamento</h3>
    <div class="mb-5">
        @foreach ($equipments as $equipment)
            <h4 class="mb-3">{{ $equipment->name }}</h4>
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
                    @foreach ($equipment->records as $record)
                        <tr>
                            <td>{{ $record->id }}</td>
                            <td>{{ $record->equipment->name }}</td>
                            <td>{{ $record->user->name }}</td>
                            <td>{{ $recordTypes[$record->type] }}</td>
                            <td>{{ $record->description }}</td>
                            <td>{{ $record->date }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="5">Total</td>
                        <td>{{ count($equipment->records) }}</td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>
@endsection
