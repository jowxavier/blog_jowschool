<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

        <title>Login</title>

    </head>

    <body>
        <div id="login">
            <form class="card" action="verifica_login.php" method="POST">
                <div class="card-header">
                    <h2>Login</h2>
                </div>

                <div class="card-content">
                    <div class="card-content-area">
                        <label for="usuario">Nome</label>
                        <input type="text" id="usuario" autocomplete="off" name="nome">
                    </div>
                
                <div class="card-content">
                    <div class="card-content-area">
                        <label for="usuario">E-mail</label>
                        <input type="text" id="usuario" autocomplete="off" name="email">
                    </div>

                    <div class="card-content-area">
                        <label for="password">Senha</label>
                        <input type="password" id="password" autocomplete="off" name="senha">
                    </div>

                </div>
                <div class="card-footer">
                    <input type="submit" value="Acessar Blog" class="submit">


                   
                </div>

            </form>
        </div>
    </body>
</html>

















