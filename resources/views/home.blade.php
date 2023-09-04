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

    <div>
        <h2>Faça seu login: </h2>
        <form action="#" method="POST">
            <div>
                <div>
                    <input name="loginnome" type="text" placeholder="nome" autocomplete="off">
                </div>
                <div>
                    <input name="loginpassword" type="password" placeholder="senha" autocomplete="off">
                </div>
                <div>
                    <button>Logar</button>
                </div>
            </div>
        </form>
    </div>
    

    <div>
        <h2>Faça seu Cadastro</h2>
        <form action="#" method="POST">
            <div>
                <label for="cadastro-login">Login: </label>
                <input name="login" id="cadastro-login" type="text" placeholder="Digite seu login" autocomplete="off">
            </div>

            <div>
                <label for="cadastro-email">Email: </label>
                <input name="email" id="cadastro-email" type="text" placeholder="login@mail.com" autocomplete="off">
            </div>

            <div>
                <label for="cadastro-senha">Senha: </label>
                <input name="senha" id="cadastro-senha" type="password" placeholder="Digite sua senha" autocomplete="off">
            </div>

            <div>
                <label for="cadastro-senha-confirmacao">Confirme sua Senha: </label>
                <input name="senha" id="cadastro-senha-confirmacao" type="password" placeholder="Confirme sua senha" autocomplete="off">
            </div>

            <button type="submit">Cadastrar</button>
            
        </form>
    </div>
    

</body>
</html>