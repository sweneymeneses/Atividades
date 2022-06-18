@extends('layout')

@section('conteudo')

<div class="container">
    <div class="centered">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h1 class="text-center">Cadastro</h1>
        </div>
        <form action="/signup" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="name" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary d-block mb-3 w-100">Cadastrar</button>
            <a href="/signin" class="text-center d-block">Já tem uma conta? Faça login</a>
        </form>
    </div>
</div>

@endsection
