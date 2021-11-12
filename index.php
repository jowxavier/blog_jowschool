<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container"><br>
        <form action="scripts/usuario.php" method="POST">
            <input type="hidden" name="login" value="1">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="jonathanxribeiro@gmail.com">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="******">
            </div><br>
            <button type="submit" class="btn btn-success">Entrar</button>
        </form>
    </div>
</body>

</html>