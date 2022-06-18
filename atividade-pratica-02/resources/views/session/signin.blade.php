@extends('layout')

@section('conteudo')

<div class="container">
    <div class="centered">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h1 class="text-center">Login</h1>
        </div>
        @if (session()->get('fail'))
            <div class="alert alert-danger">
                {{ session()->get('fail') }}
            </div>
            <br />
        @endif
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            <br />
        @endif
        <form action="/auth" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary d-block w-100 mb-3">Login</button>
            <a href="/signup" class="d-block text-center">Não tem uma conta? Registre-se</a>
        </form>
    </div>
</div>

@endsection
