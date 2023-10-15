<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Mentor</title>
</head>
<body>
    <h1>Sistema Mentor</h1>
    @auth <!-- @ auth testa se há uma sessão, ou seja, se está logado.
        Caso estiver, não mostrar o form de logar -->
        <h2>Bem vindo! Você está logado!</h2>
        <form action="/logout" method="POST">
            @csrf
            <button>Sign Out</button>
        </form>
    @else
        <h2>Faça seu login: </h2>
        <form action="/logar" method="POST">
            @csrf

            <input name="login" type="text" placeholder="email@mail.com">
            <!-- Para a função de login do laravel funcionar, 
                o nome do campo da senha deve ser "password" -->
            <input name="password" type="password" placeholder="digite sua senha">

            <button>Logar</button>

        </form>
    @endauth

    @if (session()->has('success'))
        {{session('success')}}
    @endif

    @if (session()->has('failure'))
        {{session('failure')}}
    @endif

    <div>
        <h2>Faça seu Cadastro</h2>
        <form action="/cadastrar" method="POST">
            @csrf
            <div>
                <label for="cadastro-login">Login: </label>
                <input value="{{old('nome')}}" name="nome" id="cadastro-login" type="text" placeholder="Digite seu login" autocomplete="off">
                @error('nome')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="cadastro-email">Email: </label>
                <input value="{{old('email')}}" name="email" id="cadastro-email" type="text" placeholder="login@mail.com" autocomplete="off">
                @error('email')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="cadastro-senha">Senha: </label>
                <input name="senha" id="cadastro-senha" type="password" placeholder="Digite sua senha" autocomplete="off">
                @error('senha')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="cadastro-senha-confirmacao">Confirme sua Senha: </label>
                <input name="senha_confirmation" id="cadastro-senha-confirmacao" type="password" placeholder="Confirme sua senha" autocomplete="off">
                @error('senha_confirmation')
                    <p>{{$message}}</p>
                @enderror
            </div>

            <button type="submit">Cadastrar</button>
            
        </form>
    </div>

</body>
</html>