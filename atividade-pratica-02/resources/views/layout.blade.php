<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <title>Manutenção Equipamentos</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/layout.css">
</head>

<body>
    <div class="main-container shadow">
        <div class="header">
            <nav class="navbar navbar-expand-lg" id="nav-principal">
                <div class="collapse navbar-collapse justify-content-between px-5" id="navbarNavAltMarkup">
                    <div>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Manutenção Equipamentos</a>
                        </li>
                    </div>

                    <div class="d-flex">
                        <li class="nav-item">
                            <a id="navbar" class="nav-link" href="/general">Área Geral</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Área Administrativa
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if (!session('id'))
                                    <a class="dropdown-item" href="/signup">Novo usuário</a>
                                    <a class="dropdown-item" href="/signin">Acesso</a>
                                @else
                                    <a class="dropdown-item" href="/equipment">Equipamentos</a>
                                    <a class="dropdown-item" href="/records">Manutenções</a>
                                    <a class="dropdown-item" href="/users">Usuários</a>
                                    <a class="dropdown-item" href="/records-report">Relatório de Manutenções</a>
                                    <a class="dropdown-item" href="/logout">Sair</a>
                                @endif
                            </div>
                        </li>
                    </div>
                </div>
            </nav>
        </div>
        <div class="content">
            @yield('conteudo')
        </div>
    </div>

</body>

</html>
