@extends('layout')

@section('conteudo')

<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <h1 class="text-center">Cadastrar Manutenção</h1>
    </div>

    <div class="centered">
        <form action="/records/{{ $record->id }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3 d-flex gap-3">
                <div class="w-100">
                    <label for="equipment" class="form-label">Equipamento</label>
                    <select name="equipment_id" id="equipment" class="form-control">
                        @foreach ($equipments as $equipment)
                            <option
                                value="{{ $equipment->id }}"
                                {{ $record->equipment_id == $equipment->id ? 'selected' : '' }}
                            >
                                {{ $equipment->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-100">
                    <label for="user" class="form-label">Usuário</label>
                    <select name="user_id" id="user" class="form-control">
                        @foreach ($users as $user)
                            <option
                                value="{{ $user->id }}"
                                {{ $record->user_id == $user->id ? 'selected' : '' }}
                            >
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ $record->description }}">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data</label>
                <input type="date" class="form-control" name="date" id="date" value="{{ $record->date }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select name="type" id="type" class="form-control">
                    @foreach ($recordTypes as $key => $type)
                        <option
                            value="{{ $key }}"
                            {{ $record->type == $type ? 'selected' : '' }}
                        >
                            {{ $type }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary d-block w-100">Salvar</button>
        </form>
    </div>
</div>

@endsection
