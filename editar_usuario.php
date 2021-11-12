<?php
session_start();

// Verifica se existe sessão
if (empty($_SESSION['usuario'])) {
    header('Location: index.php');exit();
}

// Incluindo Classe de conexão
include('classes/Conexao.class.php');

// Incluindo Classe de Usuario
include('classes/Usuario.class.php');

// Cria uma instância da Classe Usuario
$usuario = new Usuario();
// Acessa o método exibirPorId de funcionário
$data = $usuario->exibirPorId($_GET['id']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Usuarios <?php echo $data['titulo']; ?></title>
</head>
<body>
    <div class="container"><br><br>
        <form action="scripts/usuario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="form-group">
                <label for="titulo">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome"  class="form-control" value="<?php echo $data['nome']; ?>">
            </div>
            <br>
            <div class="form-group">
                <label for="descricao">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email"  class="form-control" value="<?php echo $data['email']; ?>">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>